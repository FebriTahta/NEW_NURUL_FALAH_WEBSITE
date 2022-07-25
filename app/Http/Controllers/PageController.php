<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Kategoriposting;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function list_berita_artikel($jenis_slug)
    {
        
        $beritas    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) use ($jenis_slug) {
            $q->where('jenis_slug', $jenis_slug);
        })->paginate(10);
        
        $kategoris    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) use ($jenis_slug) {
            $q->where('jenis_slug', $jenis_slug);
        })->select('kategoriposting_id')->get();
        
        $kategori = Kategoriposting::select("*")
                    ->whereIn('id', $kategoris)
                    ->get();

        $allKategori= Kategoriposting::select('id','kategori_name','kategori_slug')->get();

        if ($jenis_slug == 'berita') {
            # code...
            $terkini    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_slug', 'artikel');
            })->limit(3)->get();
        }else {
            # code...
            $terkini    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_slug', 'berita');
            })->limit(3)->get();
        }
        
        $jenis = $jenis_slug;

        $data_diklat = Http::get('https://admin.nurulfalah.org/api/daftar-diklat-online');
        $diklat_online = json_decode($data_diklat,true);

        return view('new.list_berita_artikel',compact('beritas','kategori','terkini','allKategori','jenis','diklat_online'));
    }

    public function detail_berita_artikel($jenis_slug, $post_slug) {

        $post      = Posting::where('slug', $post_slug)->first();
        $post->update(['views'=>$post->views + 1]);

        $kategoris    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) use ($jenis_slug) {
            $q->where('jenis_name', $jenis_slug);
        })->select('kategoriposting_id')->get();
        
        $kategori = Kategoriposting::select("*")
                    ->whereIn('id', $kategoris)
                    ->get();

        $allKategori= Kategoriposting::select('id','kategori_name','kategori_slug')->get();

        if ($jenis_slug == 'berita') {
            # code...
            $terkini    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_slug', 'artikel');
            })->limit(3)->get();
        }else {
            # code...
            $terkini    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) {
                $q->where('jenis_slug', 'berita');
            })->limit(3)->get();
        }

        $jenis = $jenis_slug;

        $related    = Posting::whereHas('jenisposting', function($q) use ($jenis_slug) {
            $q->where('jenis_slug', $jenis_slug);
        })->inRandomOrder()->limit(2)->get();
        return view('new.detail_berita_artikel',compact('post','kategori','terkini','allKategori','jenis','related'));
    }
}
