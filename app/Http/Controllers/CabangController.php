<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Posting;
use App\Models\Kategoriposting;
use DataTables;
use Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function cabang_page(Request $request)
    {
        $berita  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'berita');
        })->limit(2)->get();
        $kategori = Kategoriposting::all();
        $data = Http::get('https://tilawatipusat.com/api/daftar-cabang-api');
        $cabang = json_decode($data,true);

        // return $cabang['data']['data'];
        return view('new.list_cabang',compact('cabang','kategori','berita'));
    }

    public function cabang_page2($page)
    {
        $berita  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'berita');
        })->limit(2)->get();
        $kategori = Kategoriposting::all();
        $data = Http::get('https://tilawatipusat.com/api/daftar-cabang-api?page='.'2');
        $cabang = json_decode($data,true);
        $this_page = $page;
        return view('new.list_cabang',compact('cabang','this_page','kategori','berita'));
    }

    public function backend_cabang(Request $request)
    {
        if ($request->ajax()) {
            $data = Cabang::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-gmap="'.$data->gmap.'" data-alamat="'.$data->alamat.'" data-telp="'.$data->telp.'" data-name="'.$data->name.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('backend.cabang');
    }

    public function backend_add_cabang(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
            'telp'     => 'required',
            'alamat'     => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Cabang::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'name'=>$request->name,
                    'telp'=>$request->telp,
                    'alamat'=>$request->alamat,
                    'gmap'=>$request->map,
                    
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Cabang has been Added'
                ]
            );
        }
    }

    // BE REMOVE JENIS
    public function backend_remove_cabang(Request $request)
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

            
            Cabang::where('id', $request->id)->delete();
            return response()->json(
                [
                'status'  => 200,
                'message' => 'Cabang has been Removed'
                ]
            );
        
        }

    }

    
}
