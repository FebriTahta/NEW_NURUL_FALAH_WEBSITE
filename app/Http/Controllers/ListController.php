<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function post_daftar(Request $request)
    {
        $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q){
            $q->where('name','berita');
        })->limit(3)->get();

        // if ($request->ajax()) {
        //     # code...
        //     $view   = view('berita_artikel.data_berita',compact('beritas'))->render();
        //     return response()->json(['html',$view]);
        // }
        
        return view('berita_artikel.list_berita',compact('beritas'));
    }

    public function load_more(Request $request)
    {
        if($request->ajax())
        {
            if($request->id > 0)
            {
                $data = Posting::where('id', '<', $request->id)
                ->orderBy('id', 'DESC')
                ->with('kategoriposting','jenisposting')
                ->whereHas('jenisposting', function($q){
                    $q->where('name','berita');
                })
                ->limit(1)
                ->get();
            }
            else
            {
                $data =Posting::orderBy('id', 'DESC')
                ->with('kategoriposting','jenisposting')
                ->whereHas('jenisposting', function($q){
                    $q->where('name','berita');
                })
                ->limit(1)
                ->get();
            }
            return response()->json([
                "berita"=>$data,
            ]);
            
        }
    
    }
}
