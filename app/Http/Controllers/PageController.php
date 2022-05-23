<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Kategoriposting;
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
        return view('new.list_berita_artikel',compact('beritas','kategori','terkini','allKategori','jenis'));
    }

    public function detail_berita_artikel($jenis_slug, $post_slug) {

        $beritas      = Posting::where('slug', $post_slug)->first();
        
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
        return view('new.detail_berita_artikel',compact('beritas','kategori','terkini','allKategori','jenis','related'));
    }
}
