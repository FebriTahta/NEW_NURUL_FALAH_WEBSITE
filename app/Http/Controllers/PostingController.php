<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function detail_artikel()
    {
        return view('page.detail_artikel');
    }
}
