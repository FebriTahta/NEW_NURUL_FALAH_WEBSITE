<?php

namespace App\Http\Controllers;
use App\Helpers\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\Posting;

class ApiMediaController extends Controller
{
    public function berita()
    {
        $data = Posting::orderBy('id','desc')->with('jenisposting','kategoriposting','sumberposting')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'berita');
        })->paginate(5);

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
        $data = Posting::orderBy('id','desc')->with('jenisposting','kategoriposting','sumberposting')->whereHas('jenisposting', function($q) {
            $q->where('jenis_name', 'artikel');
        })->paginate(5);

        if($data)
        {
            # code...
            return ApiFormatter::createApi(200, 'success' ,$data);
        }else {
            # code...
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    public function detail_berita($posting_slug)
    {
        $datas = Posting::where('slug',$posting_slug)->first();


        $data = $datas
                ->join('jenispostings','postings.jenisposting_id','jenispostings.id')
                ->join('kategoripostings','postings.kategoriposting_id','kategoripostings.id')
                ->join('penulispostings','postings.penulisposting_id','penulispostings.id')
                ->join('sumberpostings','postings.sumberposting_id','sumberpostings.id')
                ->select('judul','slug','deskripsi','thumbnail','jenis_name','kategori_name','penulis_name','sumber_name')->first();
        if($data)
        {
            # code...
            return ApiFormatter::createApi(200, 'success' ,$data);
        }else {
            # code...
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    public function detail_artikel($posting_slug)
    {
        $data = Posting::where('slug',$posting_slug)->with('jenisposting','kategoriposting','sumberposting')->first();
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
