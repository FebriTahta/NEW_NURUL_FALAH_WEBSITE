<?php

namespace App\Http\Controllers;
use App\Helpers\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\Posting;

class ApiMediaController extends Controller
{
    public function berita()
    {
        $data = Posting::orderBy('id','desc')->with('jenisposting')->whereHas('jenisposting', function($q) {
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
}
