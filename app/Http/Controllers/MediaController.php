<?php

namespace App\Http\Controllers;
use App\Models\Social;
use App\Models\Jenisposting;
use App\Models\Posting;
use DataTables;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Validator;

class MediaController extends Controller
{
    public function media_page()
    {
        $artikels = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'artikel');
        })->limit(10)->get();
        $post = Jenisposting::all();
        return view('page.media_mobile_choice',compact('post','artikels'));
    }
    
    public function media_list(Request $request, $jenisposting_slug)
    {
        $jenis  = Jenisposting::where('slug', $jenisposting_slug)->first();
        $post   = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) use($jenis){
                  $q->where('name',$jenis->name);
        })->paginate(6);
        $total  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) use($jenis){
            $q->where('name',$jenis->name);
        })->count();
        return view('page.list_media',compact('post','jenis','total'));
    }

    public function media_search(Request $request)
    {

        if($request->get('query'))
        {
            $jenis  = Jenisposting::where('slug', $request->get('jenis'))->first();
            $post = Posting::with('jenisposting','kategoriposting')->whereHas('jenisposting', function($q) use($jenis){
                $q->where('name',$jenis->name);
            })->where('judul','LIKE','%'.$request->get('query').'%')->get();
            
            return response()->json(
                [
                  'data'    => $post,
                  'status'  => 200,
                  'message' => 'oke'
                ]
            );
        }
    }

    public function backend_media(Request $request)
    {
        if ($request->ajax()) {
            $data = Social::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function($data){
                    $image = '<img src="'.asset('img_socmed/'.$data->img).'" width="100%" alt="">';
                    return $image;
                })
                ->addColumn('action', function($data){
                    $actionBtn = ' <a data-toggle="modal" data-target="#modaledit" data-id="'.$data->id.'" data-name="'.$data->name.'" data-link="'.$data->link.'"
                    data-src="'.asset('img_socmed/'.$data->img).'" data-img="'.$data->img.'" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-img="'.$data->img.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','image'])
                ->make(true);
        };

        return view('backend.media');
    }

    public function backend_add_media(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
            'link'     => 'required',
            'img'      => 'image|mimes:jpeg,jpg,png,gif' 
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            $filename   = time().'.'.$request->img->getClientOriginalExtension();
                $request->file('img')->move('img_socmed/',$filename);

                Social::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'name' => $request->name,
                        'link' => $request->link,
                        'img'  => $filename,
                        'slug' => Str::slug($request->name),
                    ]
                );
            

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Media has been Added'
                ]
            );
        }
    }

    public function backend_update_media(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
            'link'     => 'required',
            'img'      => 'image|mimes:jpeg,jpg,png,gif' 
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            $gambar     = Social::find($request->id);
            $path       = public_path('img_socmed/'.$request->img);
            $isExists   = file_exists($path);

            if ($isExists == true) {
                # code...
                # biarkan gambar yang udah ada
                Social::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'name' => $request->name,
                        'link' => $request->link,
                        'slug' => Str::slug($request->name),
                    ]
                );
            }else {
                # code...
                # hapus gambar ganti ke gambar baru
                unlink('img_socmed/'.$gambar->img);

                $filename   = time().'.'.$request->img->getClientOriginalExtension();
                $request->file('img')->move('img_socmed/',$filename);

                Social::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'name' => $request->name,
                        'link' => $request->link,
                        'img'  => $filename,
                        'slug' => Str::slug($request->name),
                    ]
                );
            }
            

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Media has been Updated'
                ]
            );
        }
    }

    public function backend_remove_media(Request $request)
    {
        $data = Social::find($request->id)->delete();
        unlink('img_socmed/'.$request->img);
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Media has been Removed'
                ]
            );
    }

    
}
