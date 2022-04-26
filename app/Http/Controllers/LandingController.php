<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\Youtube;
use App\Models\Jenisposting;

class LandingController extends Controller
{
    public function landing_page()
    {
        
        $jadwal_sholat  = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
        $artikels = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'artikel');
        })->limit(4)->get();
        $berita  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'berita');
        })->first();
        if ($berita !== null) {
            # code...
            $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
                $q->where('name', 'berita');
            })->limit(2)->whereNotIn('id', [$berita->id])->get();
        }else {
            # code...
            $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
                $q->where('name', 'berita');
            })->limit(2)->get();
        }
        $berita_mobile = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'berita');
        })->limit(4)->get();
        // return view('page.floating');
        $kategori_berita = Kategoriposting::with('posting', function($q){
            $q->whereHas('jenisposting',function($qq){
                $qq->where('name','berita');
            });
        })->get();
        $jenis_berita = Jenisposting::where('name','berita')->first();
        $jenis_artikel = Jenisposting::where('name','artikel')->first();
        $youtube = Youtube::orderBy('id','desc')->limit(6)->get();
        return $kategori_berita;
        return view('page.landing_page',compact('jadwal_sholat','artikels','beritas','berita','berita_mobile','youtube','jenis_berita','jenis_artikel','kategori_berita'));
    }
}
