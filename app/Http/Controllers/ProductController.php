<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_page()
    {
        return view('page.product_page');
    }
}
