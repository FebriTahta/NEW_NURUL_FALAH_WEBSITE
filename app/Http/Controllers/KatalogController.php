<?php

namespace App\Http\Controllers;
use App\Models\Katalog;
use App\Models\Posting;
use DataTables;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function backend_katalog_list(Request $request)
    {

        if ($request->ajax()) {
            $data = Katalog::select('id','katalog_name','katalog_slug');
            return Datatables::of($data)
                // ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <a href="#'.$data->katalog_slug.'" data-id="'.$data->id.'" data-katalog_name="'.$data->katalog_name.'" class="delete btn btn-info btn-sm"></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-katalog_name="'.$data->katalog_name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_katalog = Katalog::count();
        return view('backend_new.list_katalog',compact('activity','total_katalog'));
    } 

    public function backend_katalog_add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'katalog_name'  => 'required|max:100',            
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            $data = Katalog::updateOrCreate(
                ['id'=>$request->id],
                [
                    'katalog_name' => $request->katalog_name,
                    'katalog_slug' => Str::slug($request->katalog_name),
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Katalog Disimpan'
                ]
            );
        }
    }

    public function backend_katalog_remove(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'  => 'required',            
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Data Tidak Ditemukan',
                'errors' => $validator->messages(),
            ]);

        }else {

            $product = Product::where('katalog_id', $request->id)->count();

            if ($product > 0) {
                # code...
                return response()->json(
                    [
                      'status'  => 400,
                      'message' => 'Katalog tidak dapat dihapus karena terdapat product dengan katalog tersebut'
                    ]
                );
            }else {
                # code...
                $data = Katalog::where('id', $request->id)->delete();
                return response()->json(
                    [
                      'status'  => 200,
                      'message' => 'Katalog Berhasil Dihapus'
                    ]
                );
            }
        }
    }
}
