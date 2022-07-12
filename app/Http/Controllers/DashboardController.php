<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function backend_dashboard()
    {
        return view('backend.dashboard');
    }
}
