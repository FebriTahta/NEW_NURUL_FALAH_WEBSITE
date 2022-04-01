<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Posting;

class LandingController extends Controller
{
    public function landing_page()
    {
        
        $jadwal_sholat  = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
        $artikels = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'artikel');
        })->limit(4)->get();
        $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'berita');
        })->limit(3)->get();
        return view('page.landing_page',compact('jadwal_sholat','artikels','beritas'));
    }
}
