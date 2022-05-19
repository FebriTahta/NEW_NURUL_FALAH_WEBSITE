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
            $q->where('name', 'berita');
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
            $q->where('name', 'artikel');
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
        $data   = Posting::where('slug',$posting_slug)->whereHas('jenisposting', function($q) {
            $q->where('slug', 'berita');
        })->first();

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
