<?php

namespace App\Http\Controllers;
use App\Models\Target;
use App\Models\Broadcast;
use App\Models\Posting;
use DataTables;
use Validator;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index_broadcast(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data   = Broadcast::orderBy('id', 'asc')->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $actionBtn = ' <button data-id="'.$data->id.'" data-judul_broadcast="'.$data->judul_broadcast.'" data-desc_broadcast="'.$data->desc_broadcast.'" data-img_broadcast="'.$data->img_broadcast.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
            })
            ->addColumn('target', function($data){
                return count($data->target).' - Target';
            })
            ->addColumn('img', function($data){
                if ($data->img_broadcast !== null) {
                    # code...
                    $img = '<img src="'.$data->img_broadcast.'" style="max-width:100px" alt="">';
                    return $img;
                }else{
                    return '<p class="text-danger">kosong<p>';
                }
            })
            ->rawColumns(['action','target','img'])
            ->make(true);
        }
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_target = Target::count();
        $total_broadcast = Broadcast::count();
        return view('backend_new.broadcast',compact('activity','total_target','total_broadcast'));
    }

    public function store_broadcast(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_broadcast'   => 'required',
            'desc_broadcast'    => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            if ($request->img_broadcast !== null) {
                # image tidak kosong code...
                $filename1   = time().'.'.$request->img_broadcast->getClientOriginalExtension();
                $request->img_broadcast->move(public_path('img/img_broadcast/'), $filename1);
                # code...
                $data   = Broadcast::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul_broadcast'             => $request->judul_broadcast,
                        'img_broadcast'              => asset('img/img_broadcast/'.$filename1),
                        'desc_broadcast'            => $request->desc_broadcast,
                    ]
                );

                return response()->json(
                    [
                      'status'  => 200,
                      'message' => 'Broadcast baru berhasil ditambahkan'
                    ]
                );

            }else{
                # imgae kosong code...
                Broadcast::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'judul_broadcast'=>$request->judul_broadcast,
                        'desc_broadcast'=>$request->desc_broadcast,
                    ]
                );
    
                return response()->json(
                    [
                      'status'  => 200,
                      'message' => 'Broadcast baru berhasil ditambahkan'
                    ]
                );
            }
        }
    }

    public function remove_broadcast(Request $request)
    {
        $broadcast = Broadcast::findOrFail($request->id);

        if ($broadcast->target->count() > 0) {
            # code...

            if ($broadcast->img_broadcast !== null) {
                # code...
                $gambar = substr($broadcast->img_broadcast, -15);
                unlink('img/img_broadcast/'.$gambar);

            }

            Target::where('broadcast_id', $broadcast->id)->delete();
            $broadcast->delete();
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Broadcast & Target didalamnya Telah Dihapus'
                ]
            );
        }else {
            # code...

            if ($broadcast->img_broadcast !== null) {
                # code...
                $gambar = substr($broadcast->img_broadcast, -15);
                unlink('img/img_broadcast/'.$gambar);

            }

            $broadcast->delete();
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Broadcast & Target didalamnya Telah Dihapus'
                ]
            );
        }
    }
}
