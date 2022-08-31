<?php

namespace App\Http\Controllers;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class FetchController extends Controller
{

    public function fetch_kabupaten(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Kabupaten::select('id','nama_kabupaten')
                    ->where('id','LIKE','%' .$search . '%')
                    ->orWhere('nama_kabupaten', 'LIKE', '%' .$search . '%')
                    ->get();
                    return response()->json($data);
        }else{
            $data = Kabupaten::select('id','nama_kabupaten')->get();
            return response()->json($data);
        }
    }

    public function fetch_kecamatan(Request $request, $kabupaten_id)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Kecamatan::where('kabupaten_id', $kabupaten_id)->select('id','nama_kecamatan')
                    ->where('id','LIKE','%' .$search . '%')
                    ->orWhere('nama_kecamatan', 'LIKE', '%' .$search . '%')
                    ->get();
                    return response()->json($data);
        }else{
            $data = Kecamatan::where('kabupaten_id', $kabupaten_id)->select('id','nama_kecamatan')->get();
            return response()->json($data);
        }
    }
    
}
