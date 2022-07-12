<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Penulisposting;
use App\Models\Sumberposting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function backend_dashboard()
    {
        $penulis = Posting::with([ 'penulisposting' => function($query) {
            $query->where('penulis_name', 'Eko Prasetyo');
          }])->count();

        return $penulis; 
        
        return view('backend.dashboard');
    }
}
