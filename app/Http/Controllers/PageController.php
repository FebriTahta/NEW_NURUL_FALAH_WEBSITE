<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Kategoriposting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function list_berita($jenis_slug)
    {
        
        $beritas    = Posting::orderBy('urut','desc')->whereHas('jenisposting', function($q) use ($jenis_slug) {
            $q->where('jenis_name', $jenis_slug);
        })->paginate(2);
        
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
        return view('new.list',compact('beritas','kategori','terkini','allKategori','jenis'));
    }
}
