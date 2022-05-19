<?php

namespace App\Http\Controllers;
use App\Helpers\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\Posting;
use DB;

class ApiMediaController extends Controller
{
    public function berita()
    {
        $data = Posting::whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'berita');
        })
        ->join('jenispostings','postings.jenisposting_id','jenispostings.id')
        ->join('kategoripostings','postings.kategoriposting_id','kategoripostings.id')
        ->join('penulispostings','postings.penulisposting_id','penulispostings.id')
        ->join('sumberpostings','postings.sumberposting_id','sumberpostings.id')
        ->select('judul','slug','deskripsi','thumbnail','jenis_name','kategori_name','penulis_name','sumber_name','tanggal')
        ->paginate(5);
        
        if($data)
        {
            # code...
            return ApiFormatter::createApi(200, 'success' ,$data);
        }else {
            # code...
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    public function artikel()
    {
        $data = Posting::whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'artikel');
        })
        ->join('jenispostings','postings.jenisposting_id','jenispostings.id')
        ->join('kategoripostings','postings.kategoriposting_id','kategoripostings.id')
        ->join('penulispostings','postings.penulisposting_id','penulispostings.id')
        ->join('sumberpostings','postings.sumberposting_id','sumberpostings.id')
        ->select('judul','slug','deskripsi','thumbnail','jenis_name','kategori_name','penulis_name','sumber_name','tanggal')
        ->paginate(5);

        
        if($data)
        {
            # code...
            return ApiFormatter::createApi(200, 'success' ,$data);
        }else {
            # code...
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    public function detail($posting_slug)
    {
        $data = Posting::where('slug',$posting_slug)
        ->join('jenispostings','postings.jenisposting_id','jenispostings.id')
                ->join('kategoripostings','postings.kategoriposting_id','kategoripostings.id')
                ->join('penulispostings','postings.penulisposting_id','penulispostings.id')
                ->join('sumberpostings','postings.sumberposting_id','sumberpostings.id')
                ->select('judul','slug','deskripsi','thumbnail','jenis_name','kategori_name','penulis_name','sumber_name','tanggal')->first();
                
        if($data)
        {
            # code...
            return ApiFormatter::createApi(200, 'success' ,$data);
        }else {
            # code...
            return ApiFormatter::createApi(400, 'failed');
        }
    }
}
