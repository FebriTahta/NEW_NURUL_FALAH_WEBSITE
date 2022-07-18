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

        $total_berita = Posting::whereHas('jenisposting', function($query){
          $query->where('jenis_name','berita');
        })->count();

        $total_artikel = Posting::whereHas('jenisposting', function($query){
          $query->where('jenis_name','artikel');
        })->count();
        
        $total_sumber  = Sumberposting::count();
        
        $total_penulis = Penulisposting::count();
        
        $total_viewer  = Posting::sum('views');

        $total_viewer_berita = Posting::whereHas('jenisposting', function($query){
          $query->where('jenis_name','berita');
        })->sum('views');

        $total_viewer_artikel = Posting::whereHas('jenisposting', function($query){
          $query->where('jenis_name','artikel');
        })->sum('views');

        $posting  = Posting::orderBy('views', 'desc')->get();
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        // return view('backend.dashboard', compact('penulis1','penulis2','posting'));
        return view('backend_new.dashboard',compact('activity','total_berita','total_artikel','total_sumber','total_penulis','total_viewer'
      ,'total_viewer_berita','total_viewer_artikel'));
    }

    public function chartBerita(Request $request)
    {

      
      $berita = [];
      $date_now = date('Y');
      $month = [01,02,03,04,05,06,07,8,9,10,11,12];
      $monthNames = collect($month)->transform(function ($value) {
        return \Carbon\Carbon::parse(date('Y').'-'.$value.'-01')->format('M');
      })->toArray();

      foreach ($month as $key => $value) {
        # code...
        $berita[] = Posting::whereHas('jenisposting', function($query){
          $query->where('jenis_name','berita');
        })->count();
      }

      // return $respon=[
      //   'status'=>'success',
      //   'msg'=>null,
      //   'content'=>[
      //       'monthNames'=>$monthNames,
      //       'berita'=>$berita,
      //   ]
      // ];
      return $monthNames;
    }
}
