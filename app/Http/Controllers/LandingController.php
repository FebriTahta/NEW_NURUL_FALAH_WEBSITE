<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing_page()
    {
        $jadwal_sholat = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
    
        return view('page.landing_page',compact('jadwal_sholat'));
    }
}
