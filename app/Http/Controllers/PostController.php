<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Kategoriposting;
use App\Models\Sumberposting;
use App\Models\Jenisposting;
use App\Models\Penulisposting;
use App\Models\Imageposting;
use Validator;
use Illuminate\Support\Str;
use DataTables;
use Image;
use File;
use App\Models\Social;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_detail($jenisposting_slug, $posting_slug)
    {
        $post = Posting::where('slug',$posting_slug)->first();
        $post->update(['views'=>$post->views+1]);
        return view('berita_artikel.post',compact('post'));

    }

    public function detail_artikel($jenisposting_slug, $posting_slug)
    {   
        $post   = Posting::where('slug',$posting_slug)->first();
        $post->update(['views'=>$post->views + 1]);
        $latest = Posting::limit(4)->get();
        $categories = Kategoriposting::with('posting')->get();
        
        return view('page.detail_post',compact('post','latest','categories'));
    }

    // BE
    public function backend_posting()
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $sumber     = Sumberposting::all();
        $penulis    = Penulisposting::all();
        $kategori   = Kategoriposting::all();
        $jenis      = Jenisposting::all();
        return view('backend_new.posting',compact('sumber','penulis','kategori','jenis','activity'));
        // return view('backend.post',compact('sumber','penulis','kategori','jenis'));
    }

    public function backend_posting_edit($posting_slug)
    {
        $sumber     = Sumberposting::all();
        $penulis    = Penulisposting::all();
        $kategori   = Kategoriposting::all();
        $jenis      = Jenisposting::all();
        $data = Posting::where('slug',$posting_slug)->first();
        return view('backend.post_edit',compact('data','sumber','penulis','kategori','jenis'));
    }

    public function backend_remove_posting(Request $request)
    {
        $data2= Imageposting::where('posting_id', $request->id)->get();
        if ($data2->count() > 0) {
            # code...
            foreach ($data2 as $key => $value) {
                # code...
                unlink('img_posting/'.$value->img);
            }
            Imageposting::where('posting_id', $request->id)->delete();
        }

        $data = Posting::find($request->id)->delete();
        unlink('img_thumbnail/'.$request->thumbnail);
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Postingan has been Removed'
                ]
            );
    }

    public function backend_list_posting(Request $request)
    {
        if ($request->ajax()) {
            $data = Posting::orderBy('id','desc')->with(['jenisposting','kategoriposting','penulisposting','sumberposting'])->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('jenis', function($data){
                    return $data->jenisposting->jenis_name;
                })
                ->addColumn('penulis', function($data){
                    return $data->penulisposting->penulis_name;
                })
                ->addColumn('sumber', function($data){
                    return $data->sumberposting->sumber_name;
                })
                ->addColumn('kategori', function($data){
                    return $data->kategoriposting->kategori_name;
                })
                ->addColumn('action', function($data){
                    $actionBtn = ' <a href="/admin/edit-posting/'.$data->slug.'" data-id="'.$data->id.'" data-name="'.$data->name.'" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-thumbnail="'.$data->thumbnail.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','jenis','kategori','penulis','sumber'])
                ->make(true);
        };
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_posting = Posting::count();
        return view('backend_new.daftar_postingan',compact('activity','total_posting'));
    }

    
    // BE ADD NEW POSTING
    public function backend_add_posting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'             => 'required|max:100',
            'jenisposting_id'   => 'required',
            'sumberposting_id'  => 'required',
            'penulisposting_id' => 'required',
            'deskripsi'         => 'required',
            'thumbnail'         => 'image|mimes:jpeg,jpg,png,gif',
            'imageposting.*'    => 'image|mimes:jpeg,jpg,png,gif'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            $urut       = Posting::where('jenisposting_id',$request->jenisposting_id)->count();
            if ($request->thumbnail !== null) {
                # code...
                $filename   = time().'.'.$request->thumbnail->getClientOriginalExtension();
                $request->file('thumbnail')->move('img_thumbnail/',$filename);
                $data       = Posting::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'judul'=>$request->judul,
                        'slug' => Str::slug($request->judul),
                        'jenisposting_id'=>$request->jenisposting_id,
                        'sumberposting_id'=>$request->sumberposting_id,
                        'penulisposting_id'=>$request->penulisposting_id,
                        'kategoriposting_id'=> $request->kategoriposting_id,
                        'deskripsi'=>$request->deskripsi,
                        'thumbnail'=>$filename,
                        'urut'=>$urut+1,
                    ]
                );
            }else {
                # code...
                $data       = Posting::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'judul'=>$request->judul,
                        'slug' => Str::slug($request->judul),
                        'jenisposting_id'=>$request->jenisposting_id,
                        'sumberposting_id'=>$request->sumberposting_id,
                        'penulisposting_id'=>$request->penulisposting_id,
                        'kategoriposting_id'=> $request->kategoriposting_id,
                        'deskripsi'=>$request->deskripsi,
                        'urut'=>$urut+1,
                    ]
                );
            }

            // image posting yang lebih dari 1
            if ($request->hasfile('imageposting')) {
                # code...
                foreach ($request->file('imageposting') as $key => $items) {
                    # code...
                    $imgname   = time().$key.'.'.$items->getClientOriginalExtension();
                    $items->move('img_posting/',$imgname);
                    $imagepost = Imageposting::updateOrCreate(
                        [
                            'id' => $request->id
                        ],
                        [
                            'posting_id'=>$data->id,
                            'img'=>$imgname
                        ]
                    );
                }
            }
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Postingan Diterbitkan'
                ]
            );
        }
    }

    // BE KATEGORI
    public function backend_kategori(Request $request)
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_kategori = Kategoriposting::count();
        if ($request->ajax()) {
            $data = Kategoriposting::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend_new.kategori',compact('activity','total_kategori'));
    }

    // BE ADD KATEGORI
    public function backend_add_kategori(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Kategoriposting::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'kategori_name'=>$request->name,
                    'kategori_slug' => Str::slug($request->name),
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Kategori has been Added'
                ]
            );
        }
    }

    // BE REMOVE KATEGORI
    public function backend_remove_kategori(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_id'     => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Kategoriposting::where('id', $request->kategori_id)->delete();
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Kategori has been Removed'
                ]
            );
        
        }

    }

    // BE SUMBER
    public function backend_sumber(Request $request)
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_narasumber = Sumberposting::count();
        if ($request->ajax()) {
            $data = Sumberposting::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend_new.sumber',compact('activity','total_narasumber'));
    }

    // ADD SUMBER
    public function backend_add_sumber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Sumberposting::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'sumber_name'=>$request->name,
                    'sumber_slug' => Str::slug($request->name),
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Sumber postingan has been Added'
                ]
            );
        }
    }

    // BE REMOVE SUMBER
    public function backend_remove_sumber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'     => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            $data = Sumberposting::where('id', $request->id)->with('posting')->first();
            if ($data->posting->count() > 0) {
                # punya berita / artikel maka tidak bisa dihapus code...
                return response()->json(
                    [
                        'status' => 400,
                        'message'  => 'Sumber tsb tidak dapat dihapus',
                    ]
                );
            }else {
                # hapus sumber berita code...
                Sumberposting::where('id', $request->id)->delete();
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Sumber postingan has been Removed'
                    ]
                );
            }
        
        }

    }

    // BE PENULIS
    public function backend_penulis(Request $request)
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_redaksi = Penulisposting::count();
        if ($request->ajax()) {
            $data = Penulisposting::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend_new.redaksi',compact('activity','total_redaksi'));
        // return view('backend.penulis');
    }
    
    // BE ADD PENULIS
    public function backend_add_penulis(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Penulisposting::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'penulis_name'=>$request->name,
                    'penulis_slug' => Str::slug($request->name),
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Sumber postingan has been Added'
                ]
            );
        }
    }

    // BE REMOVE PENULIS
    public function backend_remove_penulis(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'     => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            $data = Penulisposting::where('id', $request->id)->with('posting')->first();
            if ($data->posting->count() > 0) {
                # punya berita / artikel maka tidak bisa dihapus code...
                return response()->json(
                    [
                        'status' => 400,
                        'message'  => 'Redaksi tsb tidak dapat dihapus',
                    ]
                );
            }else {
                # hapus sumber berita code...
                Penulisposting::where('id', $request->id)->delete();
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Redaksi postingan has been Removed'
                    ]
                );
            }
        
        }

    }

    // BE JENIS
    public function backend_jenis(Request $request)
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_jenis = Jenisposting::count();
        if ($request->ajax()) {
            $data = Jenisposting::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend_new.jenis',compact('activity','total_jenis'));
    }
    
    // BE ADD JENIS
    public function backend_add_jenis(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Jenisposting::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'jenis_name'=>$request->name,
                    'jenis_slug' => Str::slug($request->name),
                    
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Jenis postingan has been Added'
                ]
            );
        }
    }

    // BE REMOVE JENIS
    public function backend_remove_jenis(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'     => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            $data = Jenisposting::where('id', $request->id)->with('posting')->first();
            if ($data->posting->count() > 0) {
                # punya berita / artikel maka tidak bisa dihapus code...
                return response()->json(
                    [
                        'status' => 400,
                        'message'  => 'Jenis Postingan tsb tidak dapat dihapus',
                    ]
                );
            }else {
                # hapus sumber berita code...
                Jenisposting::where('id', $request->id)->delete();
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Jenis postingan has been Removed'
                    ]
                );
            }
        
        }

    }

    public function cek(Request $request)
    {
        
        // $path = public_path('img_socmed/'.$request->img);
        // $isExists = File::exists($path);
        // return $request->img;
        $gambar     = Social::find($request->id);
        $path       = public_path('img_socmed/'.$request->img);
        $isExists   = file_exists($path);
        
        if ($isExists == true) {
            # code...
            # biarkan gambar yang udah ada
            return $gambar->img.'<br>'.'ada maka biarkan gambar yang udah ada';
        }else {
            # code...
            # hapus gambar ganti ke gambar baru
            return $gambar->img.'<br>'.'tak ada maka hapus gambar ganti ke gambar baru';
        }
    }

    public function share_post(Request $request)
    {
        return view('berita_artikel.post',compact('post'));
    }
}

