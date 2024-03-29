<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Posting;
use App\Jobs\ImportKelurahanJob;
use DataTables;
use Illuminate\Http\Request;
use App\Imports\ProvinsiImport;
use App\Imports\KabupatenImport;
use App\Imports\KecamatanImport;
use App\Imports\KelurahanImport;
use Excel;

class DaerahController extends Controller
{
    public function index_provinsi(Request $request)
    {

        if ($request->ajax()) {
            # code...
            $data   = Provinsi::orderBy('id', 'asc')->get();
            return DataTables::of($data)
                    ->addColumn('jumlah_kabupaten', function($data){
                       return $data->kabupaten->count(). ' - Kabupaten';
                    })
                    
            ->rawColumns(['jumlah_kabupaten'])
            ->make(true);
        }
        $provinsi = Provinsi::count();
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        return view('backend_new.provinsi',compact('provinsi','activity'));
    }

    public function import_provinsi(Request $request)
    {
        $data = Excel::import(new ProvinsiImport(), $request->file('file'));
        
        if(request()->ajax())
        {
        return Response()->json([
            $data,
            'success'=>'Provinsi Berhasil Ditambahkan Melalui file Excel'
        ]);
        }else {
            # code...
            return back()->with('success', 'Provinsi Imported Successfully.');
        }
    }

    public function index_kabupaten(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data   = Kabupaten::orderBy('id', 'asc')->with('provinsi','kecamatan')->get();
            return DataTables::of($data)
                    ->addColumn('jumlah_kecamatan', function($data){
                       return $data->kecamatan->count(). ' - Kecamatan';
                    })
                    ->addColumn('provinsi', function($data){
                        return $data->provinsi->nama_provinsi;
                     })
            ->rawColumns(['jumlah_kecamatan','provinsi'])
            ->make(true);
        }

        $kabupaten = Kabupaten::count();
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        return view('backend_new.kabupaten',compact('kabupaten','activity'));
    }

    public function import_kabupaten(Request $request)
    {
        $data = Excel::import(new KabupatenImport(), $request->file('file'));
        
        if(request()->ajax())
        {
        return Response()->json([
            $data,
            'success'=>'Kabupaten Berhasil Ditambahkan Melalui file Excel'
        ]);
        }else {
            # code...
            return back()->with('success', 'Kabupaten Imported Successfully.');
        }
    }

    public function index_kecamatan(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data   = Kecamatan::orderBy('id', 'asc')->with('kabupaten','kelurahan')->get();
            return DataTables::of($data)
                    ->addColumn('jumlah_kelurahan', function($data){
                       return $data->kelurahan->count(). ' - Kelurahan';
                    })
                    ->addColumn('kabupaten', function($data){
                        return $data->kabupaten->nama_kabupaten;
                     })
                    
            ->rawColumns(['jumlah_kelurahan','kabupaten'])
            ->make(true);
        }

        $kecamatan = Kecamatan::count();
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        return view('backend_new.kecamatan',compact('kecamatan','activity'));
    }

    public function import_kecamatan(Request $request)
    {
        $data = Excel::import(new KecamatanImport(), $request->file('file'));
        
        if(request()->ajax())
        {
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Kecamatan Berhasil Ditambahkan Melalui file Excel',
            'data'    => $data,
            'success' =>'Kecamatan Berhasil Ditambahkan Melalui file Excel'
            ]
        );
        }else {
            # code...
            return back()->with('success', 'Kecamatan Imported Successfully.');
        }
    }

    public function index_kelurahan(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data   = Kelurahan::orderBy('id', 'asc')->with('kecamatan')->get();
            return DataTables::of($data)
                    ->addColumn('kecamatan', function($data){
                        return $data->kecamatan->nama_kecamatan;
                     })
                    
            ->rawColumns(['kecamatan'])
            ->make(true);
        }

        $kelurahan = Kelurahan::count();
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        return view('backend_new.kelurahan',compact('kelurahan','activity'));
    }

    public function import_kelurahan(Request $request)
    {
        if(request()->ajax())
        {
            $data = Excel::import(new KelurahanImport(), $request->file('file'));
            return response()->json(
                [
                'status'  => 200,
                'message' => 'Kelurahan Berhasil Ditambahkan Melalui file Excel',
                'success' => 'Kelurahan Berhasil Ditambahkan Melalui file Excel'
                ]
            );
        }else {
            # code...
            // $data = Excel::import(new KelurahanImport(), $request->file('file'));
            
            $file = $request->file('file');
            $file = $request->file('file')->store('temp');
            $path = storage_path('app') . '/' . $file;
            dispatch(new ImportKelurahanJob($file));
            return back()->with('success', 'Kelurahan Imported Successfully.');
        }
    }
}
