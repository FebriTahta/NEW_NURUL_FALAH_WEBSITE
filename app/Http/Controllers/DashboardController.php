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
        $penulis1 = Posting::whereHas( 'penulisposting', function($query) {
            $query->where('penulis_name', 'Eko Prasetyo');
          })->count();

        $penulis2 = Posting::whereHas( 'penulisposting', function($query) {
            $query->where('penulis_name', 'Tri Eko Sulistiowati,M.Pd.I');
          })->count();

        $posting  = Posting::orderBy('views', 'desc')->limit(5)->get();

        return view('backend.dashboard', compact('penulis1','penulis2','posting'));
    }
}
