<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function list_pelatihan()
    {
        $data_diklat = Http::get('https://admin.nurulfalah.org/api/daftar-diklat-online');
        $diklat_online = json_decode($data_diklat,true);
        
        return view('new.list_pelatihan',compact('diklat_online'));
    }
}
