<?php

namespace App\Http\Controllers;
use App\Models\Cabangbaru;
use App\Models\Wilayah;
use App\Models\Lembaga;
use App\Models\Posting;
use Excel;
use DataTables;
use App\Imports\CabangImport;
use App\Imports\WilayahCabangImport;
use Illuminate\Http\Request;

class CabangTilawatiController extends Controller
{
    public function index_cabang(Request $request)
    { 
        if ($request->ajax()) {
            $data = Cabangbaru::get();
            return Datatables::of($data)
            ->addColumn('wilayah', function($data){
                $wilayah = [];
                foreach ($data->wilayah as $key => $value) {
                    # code...
                    $wilayah[] = '<a href="#" data-toggle="modal" data-target="#modalwilayahdel"
                    data-nama_cabang="'.$data->nama_cabang.'" data-nama_wilayah="'.$value->nama_wilayah.'" data-id="'.$data->id.'" data-wilayah_id="'.$value->id.'">'.$value->nama_wilayah.'</a>'; 
                }
                if ($wilayah == null) {
                    # code...
                    return '-';
                }else{
                    # code...
                    return implode('<br>', $wilayah);   
                }
            })
            ->addColumn('add_wilayah', function($data){
                return '<a href="#" data-id="'.$data->id.'" class="fa fa-plus btn btn-success icon-plus" data-toggle="modal" data-target="#modalwilayah"></a>';
            })
            ->addColumn('asal_cabang', function($data){
                if ($data->kabupaten == null) {
                    # code...
                    return '-';
                }else {
                    # code...
                    return $data->kabupaten->nama_kabupaten;
                }
            })
            ->rawColumns(['wilayah','add_wilayah','asal_cabang'])
            ->make(true);
        }

        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_cabang = Cabangbaru::count();
        return view('backend_new.cabang_tilawati',compact('total_cabang','activity'));
    }

    public function index_cabang_wilayah(Request $request)
    {
        if ($request->ajax()) {
            $data = Wilayah::get();
            return Datatables::of($data)
            ->addColumn('provinsi', function($data){
                return $data->provinsi->nama_provinsi;
             })
            
            ->rawColumns(['provinsi'])
            ->make(true);
        }

        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_wilayah = Wilayah::count();
        return view('backend_new.cabang_wilayah_tilawati',compact('total_wilayah','activity'));
    }

    public function import_cabang(Request $request)
    {
        $data = Excel::import(new CabangImport(), $request->file('file'));
        
        if(request()->ajax())
        {
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Cabang Berhasil Ditambahkan Melalui file Excel',
            'data'    => $data,
            'success' =>'Cabang Berhasil Ditambahkan Melalui file Excel'
            ]
        );
        }else {
            # code...
            return back()->with('success', 'Cabang Imported Successfully.');
        }
    }

    public function import_cabang_wilayah(Request $request)
    {
        $data = Excel::import(new WilayahCabangImport(), $request->file('file'));
        
        if(request()->ajax())
        {
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Cabang Berhasil Ditambahkan Melalui file Excel',
            'data'    => $data,
            'success' =>'Cabang Berhasil Ditambahkan Melalui file Excel'
            ]
        );
        }else {
            # code...
            return back()->with('success', 'Cabang Imported Successfully.');
        }
    }

    public function fetch_cabang_wilayah(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Wilayah::select('id','nama_wilayah')
                    ->where('id','LIKE','%' .$search . '%')
                    ->orWhere('nama_wilayah', 'LIKE', '%' .$search . '%')
                    ->get();
                    return response()->json($data);
        }else{
            $data = Wilayah::select('id','nama_wilayah')->limit(5)->get();
            return response()->json($data);
        }
    }

    public function fetch_cabang(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Cabangbaru::select('id','nama_cabang','alamat_cabang','kepala_cabang','alamat_cabang','kota_cabang','provinsi_cabang')
                    ->orWhere('nama_cabang', 'LIKE', '%' .$search . '%')
                    ->orWhere('alamat_cabang', 'LIKE', '%' .$search . '%')
                    ->orWhere('kepala_cabang', 'LIKE', '%' .$search . '%')
                    ->orWhere('alamat_cabang', 'LIKE', '%' .$search . '%')
                    ->orWhere('kota_cabang', 'LIKE', '%' .$search . '%')
                    ->orWhere('provinsi_cabang', 'LIKE', '%' .$search . '%')
                    ->get();
                    return response()->json($data);
        }else{
            $data = Cabangbaru::select('id','nama_cabang')->limit(5)->get();
            return response()->json($data);
        }
    }

    public function fetch_wilayah_cabang(Request $request, $cabang_id, $slug_form)
    {
        if ($request->ajax()) {
            $cabang_id = $cabang_id;
            $data = Wilayah::whereHas('cabangbaru',function($q) use ($cabang_id){
                $q->where('cabangbaru_id',$cabang_id);
            })->get();
            return Datatables::of($data)
            ->addColumn('action', function($data) use ($slug_form, $cabang_id){
                return '<a href="/survey-daftar-lembaga/'.\Crypt::encrypt($data->id).'/'.$slug_form.'/'.$cabang_id.'" class="btn btn-info fa fa-forward"></a>';
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function fetch_lembaga_cabang(Request $request, $cabang_id, $wilayah_id, $slug_form)
    {
        //wilayah disini diubah ke kabupaten_id
        if ($request->ajax()) {
            $cabang_id = $cabang_id;
            $data = Lembaga::where('cabangbaru_id', $cabang_id)->where('kabupaten_id', $wilayah_id)->get();
            return Datatables::of($data)
            ->addColumn('action', function($data) use ($slug_form){
                return '<a href= "/survey-lembaga/'.$slug_form.'/'.$data->slug_lembaga.'" class="btn btn-info fa fa-forward"></a>';
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function add_cabang_wilayah(Request $request)
    {
        $cabang = Cabangbaru::findOrfail($request->id);
        $wilayah_id = $request->wilayah_id;
        $wilayah = Wilayah::whereIn('id', $wilayah_id)->get();

        $cabang->wilayah()->syncwithoutdetaching($wilayah);

        return response()->json([
            'status' => 200,
            'message' => 'wilayah telah ditambahkan pada '.$cabang->nama_cabang
        ]);
    }

    public function remove_cabang_wilayah(Request $request)
    {
        $cabang = Cabangbaru::findOrfail($request->id);
        $wilayah_id = $request->wilayah_id;
        $wilayah = Wilayah::whereIn('id', $wilayah_id)->get();

        $cabang->wilayah()->detach($wilayah);
        
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus wilayah',
        ]);
    }
}
