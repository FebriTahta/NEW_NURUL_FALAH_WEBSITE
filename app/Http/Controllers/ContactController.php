<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_page()
    {
        return view('page.contact_page');
    }
}
