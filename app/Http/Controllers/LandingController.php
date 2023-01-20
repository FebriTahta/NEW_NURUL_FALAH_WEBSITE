<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\Youtube;
use App\Models\Jenisposting;
use App\Models\Kategoriposting;
use App\Models\Slider;

class LandingController extends Controller
{
    public function landing_page()
    {
        
        $jadwal_sholat  = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
        $artikels = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'artikel');
        })->limit(10)->get();
        $berita  = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'berita');
        })->first();
        if ($berita !== null) {
            # code...
            $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_name', 'berita');
            })->limit(3)->whereNotIn('id', [$berita->id])->get();
        }else {
            # code...
            $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_name', 'berita');
            })->limit(3)->get();
        }
        $berita_mobile = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'berita');
        })->limit(4)->get();
        // return view('page.floating');
        $kategori_berita = Kategoriposting::whereHas('posting', function($q){
            $q->whereHas('jenisposting', function($qq){
                $qq->where('jenis_name','berita');
            });
        })->get();
        $kategori_all = Kategoriposting::all();
        $jenis_berita = Jenisposting::where('jenis_name','berita')->first();
        $jenis_artikel = Jenisposting::where('jenis_name','artikel')->first();
        $youtube = Youtube::orderBy('id','desc')->limit(6)->get();
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.tabungamal.id/api/v1/campaign-unggulan');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer 18906df9af4d729b613ce97558a1019b'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result     = curl_exec($ch);
        curl_close($ch);
        $decode     = json_decode($result, true);
        $campaign   = $decode;

        $data_diklat = Http::get('https://admin.nurulfalah.org/api/daftar-diklat-online');
        $diklat_online = json_decode($data_diklat,true);
        
        $slider = Slider::get();
        return view('new.landing',compact('artikels','beritas','berita','berita_mobile','campaign','diklat_online','slider'));
    }
}
