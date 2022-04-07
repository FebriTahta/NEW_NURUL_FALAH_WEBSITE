<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function profile_page()
    {
        return view('page.profile');
    }

    public function backend_profile()
    {
        return view('backend.profile');
    }
}
