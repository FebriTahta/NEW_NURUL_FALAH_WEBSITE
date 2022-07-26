<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Posting;
use App\Models\Kategoriposting;
use DataTables;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_page(Request $request)
    {
        if (isset($_GET['search'])) {

            $kategori = Kategoriposting::all();
            $search = $_GET['search'];
            $product = Product::where('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_desc', 'LIKE'. '%' .$search. '%')
                                ->paginate(10);
            $berita  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_name', 'berita');
            })->limit(2)->get();

            return view('new.list_product',compact('product','kategori','berita','search'));

        }else{
            
            $search = 'null';
            $product = Product::paginate(10);
            $kategori = Kategoriposting::all();
            $berita  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_name', 'berita');
            })->limit(2)->get();
    
            return view('new.list_product',compact('product','kategori','berita','search'));
        }
    }

    public function backend_product_list(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('id','product_name','product_img','product_desc','product_slug');
            return Datatables::of($data)
                // ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <a href="#'.$data->product_slug.'" data-id="'.$data->id.'" data-product_name="'.$data->product_name.'" class="delete btn btn-info btn-sm"></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-product_img="'.$data->product_img.'" data-product_name="'.$data->product_name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','jenis','kategori','penulis','sumber'])
                ->make(true);
        };
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_product = Product::count();
        return view('backend_new.list_product',compact('activity','total_product'));
    }

    public function backend_product_create(Request $request)
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        return view('backend_new.create_product',compact('activity'));
    }

    public function backend_add_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name'  => 'required|max:100',
            'product_img'   => 'image|mimes:jpeg,jpg,png,gif',
            'product_desc'  => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            if ($request->product_img !== null) {
                # code...
                $filename   = time().'.'.$request->product_img->getClientOriginalExtension();
                $request->file('product_img')->move('product_img/',$filename);
                $data       = Product::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'product_name' => $request->product_name,
                        'product_desc' => $request->product_desc,
                        'product_slug' => Str::slug($request->product_name),
                        'product_img'  => $filename,
                    ]
                );
            }else {
                # code...
                $data       = Product::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'product_name' => $request->product_name,
                        'product_desc' => $request->product_desc,
                        'product_slug' => Str::slug($request->product_name),
                        'product_img'  => $filename,
                    ]
                );
            }

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Product Disimpan'
                ]
            );
        }
    }

    public function backend_remove_product(Request $request)
    {
        $data2= Product::where('product_img', $request->product_img)->first();
        if ($data2 !== null) {
            # code...
            unlink('product_img/'.$request->product_img);
            Product::where('id', $request->id)->delete();
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Product has been Removed'
                ]
            );
        }else {
            # code...
            return response()->json(
                [
                  'status'  => 400,
                  'message' => 'Product Tidak Memiliki Gambar'
                ]
            );
        }
    }
}
