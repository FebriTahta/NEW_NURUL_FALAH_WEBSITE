<?php

namespace App\Http\Controllers;
use App\Models\Target;
use App\Models\Broadcast;
use App\Models\Posting;
use App\Jobs\TargetJob;
use App\Imports\TargetImport;
use Excel;
use DataTables;
use Validator;
use Carbon;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index_broadcast(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data   = Broadcast::orderBy('id', 'desc')->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $actionBtn = ' <a href="/broadcast-edit/'.$data->id.'"class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></a>';
                $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                $actionBtn.= ' <a href="/broadcast-target-page/'.$data->id.'" class="delete btn btn-success btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
            })
            ->addColumn('target', function($data){
                return count($data->target).' - Target';
            })
            ->addColumn('tanggal', function($data){
                return \Carbon\Carbon::parse($data->created_at)->format('d F Y');
            })
            ->addColumn('img', function($data){
                // if ($data->img_broadcast !== null) {
                //     # code...
                //     $img = '<img src="'.$data->img_broadcast.'" style="max-width:100px" alt="">';
                //     return $img;
                // }else{
                //     return '<p class="text-danger">kosong<p>';
                // }
                if ($data->url_img !== null && $data->jenis_broadcast !== 'dokumen') {
                    # code...
                    $img = '<img src="'.$data->url_img.'" style="max-width:100px" alt="">';
                    return $img;
                }else{
                    return '<p class="text-danger">kosong<p>';
                }
            })
            ->addColumn('admin',function($data){
                $admin = '';
                if ($data->admin_broadcast == '6287787280791') {
                    # code...
                    $admin = 'NF All Bidang';
                }else {
                    # code...
                    $admin = 'Admin Tilawati (mb luluk)';
                }
                return $admin;
            })
            ->rawColumns(['action','target','img','tanggal','admin'])
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
            'admin_broadcast'   => 'required',
            'judul_broadcast'   => 'required',
            'desc_broadcast'    => 'required',
            'jenis_broadcast'   => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            if (strlen($request->desc_broadcast) > 1024) {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Deskripsi maksimal 1024 karakter',
                ]);
            }else {
                # code...
                if ($request->img_broadcast !== null || $request->url_img !== null) {
                    # image tidak kosong code...
                    // $filename1   = time().'.'.$request->img_broadcast->getClientOriginalExtension();
                    // $request->img_broadcast->move(public_path('img/img_broadcast/'), $filename1);
                    # code...
                    $data   = Broadcast::updateOrCreate(
                        [
                            'id' => $request->id
                        ],
                        [
                            'admin_broadcast'           => $request->admin_broadcast,
                            'url_img'                   => $request->url_img,
                            'judul_broadcast'           => $request->judul_broadcast,
                            // 'img_broadcast'              => asset('img/img_broadcast/'.$filename1),
                            'desc_broadcast'            => $request->desc_broadcast,
                            'jenis_broadcast'           => $request->jenis_broadcast
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
                            'admin_broadcast'           => $request->admin_broadcast,
                            'judul_broadcast'           => $request->judul_broadcast,
                            'desc_broadcast'            => $request->desc_broadcast,
                            'jenis_broadcast'           => $request->jenis_broadcast
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

    public function edit_broadcast($id)
    {
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $data = Broadcast::findOrFail($id);

        return view('backend_new.edit_broadcast',compact('activity','data'));

    }

    public function index_target(Request $request, $id)
    {
        if ($request->ajax()) {
            # code...
            $data   = Target::where('broadcast_id', $id)->orderBy('id', 'asc')->get();
            return DataTables::of($data)
            ->addColumn('status', function($data){
                if ($data->status == null) {
                    # code...
                    return '<p class="text-info">Menunggu Broadcast</p>';
                }else{
                    return '<p class="text-primary">'.$data->status.'</p>';
                }
            })
           
            ->rawColumns(['status'])
            ->make(true);
        }
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $total_target = Target::where('broadcast_id',$id)->count();
        $broadcast = Broadcast::findOrFail($id);
        return view('backend_new.target',compact('activity','total_target','broadcast'));
    }

    public function import_target(Request $request)
    {
        if ($request->file('file') !== null && $request->broadcast_id) {
            # code...
            $broadcast_id = $request->broadcast_id;
            Excel::import(new TargetImport($broadcast_id), $request->file('file'));
            $total_target = Target::where('broadcast_id', $broadcast_id)->count();
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Proses menyimpan data target',
                  'total_target' => $total_target,
                ]
            );
        }
    }

    public function remove_target_all($broadcast_id)
    {
        Target::where('broadcast_id', $broadcast_id)->delete();
        return redirect()->back()->with(['danger'=>'Seluruh Target Pada Broadcast ini Berhasil Dihapus']);
    }

    public function broadcast_all($broadcast_id)
    {
        $broadc = Broadcast::findOrFail($broadcast_id);
        if ($broadc->url_img !== null) {
            # code...
            return redirect()->back()->with(['danger'=>'Maaf untuk fitur ini hanya bisa broadcast dengan text saja (sementara)']);
        }else{
            $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
            ->chunk(20, function($targets) use ($broadc){
                foreach ($targets as $key => $item) {
                    # code...
                    TargetJob::dispatch($item,$broadc);
                }
            });
            return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
        }
       
    }

    public function broadcast_image_all($broadcast_id)
    {
        $broadc = Broadcast::findOrFail($broadcast_id);
        // return $broadc->url_img;
        // return $broadc->img_broadcast;


        if ($broadc->admin_broadcast == '6289523444715') {
            # code...
            if ($broadc->target->count() > 0) {
                # code...
                if ($broadc->jenis_broadcast == 'image') {
                    # code...
                    // return $broadc->desc_broadcast. $broadc->url_img;
                    $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
                    ->chunk(10, function($targets) use ($broadc){
                        foreach ($targets as $key => $item) {
                            # code...
                            $curl = curl_init();
                            $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                            $payload = [
                                "data" => [
                                    [
                                        'phone' => $item->telp_target,
                                        'image' => $broadc->url_img,
                                        'caption' => $broadc->desc_broadcast,
                                    ]
                                ]
                            ];
                            curl_setopt($curl, CURLOPT_HTTPHEADER,
                                array(
                                    "Authorization: $token",
                                    "Content-Type: application/json"
                                )
                            );
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
                            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/v2/send-image");
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        
                            $result = curl_exec($curl);
                            curl_close($curl);
        
                            $item->update([
                                'status' => 'Broadcast Terkirim'
                            ]);
                            
                            // print_r($result);
                            // exit();
                        }
                    });
                    return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
                }elseif($broadc->jenis_broadcast == 'dokumen'){
    
                    $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
                    ->chunk(10, function($targets) use ($broadc){
                        foreach ($targets as $key => $item) {
                            # code...
                            $curl = curl_init();
                            $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                            $data = [
                                'phone' => $item->telp_target,
                                'document' => $broadc->url_img,
                                'caption' => 'TES',
                            ];
                            curl_setopt($curl, CURLOPT_HTTPHEADER,
                                array(
                                    "Authorization: $token",
                                )
                            );
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/send-document");
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    
                            $result = curl_exec($curl);
                            curl_close($curl);
        
                            $item->update([
                                'status' => 'Broadcast Terkirim'
                            ]);
                            
                            // print_r($result);
                            // exit();
                        }
                    });
                    return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
                    // return redirect()->back()->with(['danger'=>'URL Image kosong gunakan tombol broadcast yang lain']);
                }else {
                    # Text code...
                    $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
                    ->chunk(10, function($targets) use ($broadc){
                        foreach ($targets as $key => $item) {
                            set_time_limit(0);
                            $curl = curl_init();
                            $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                            $payload = [
                                "data" => [
                                    [
                                        'phone' => $item->telp_target,
                                        'message' => $broadc->desc_broadcast,
                                        'secret' => false, // or true
                                        'retry' => false, // or true
                                        'isGroup' => false, // or true
                                    ]
                                ]
                            
                            ];
                            
                            curl_setopt($curl, CURLOPT_HTTPHEADER,
                                array(
                                    "Authorization: $token",
                                    "Content-Type: application/json"
                                )
                            );
                            
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
                            curl_setopt($curl, CURLOPT_URL, "https://solo.wablas.com/api/v2/send-message");
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                            $result = curl_exec($curl);
                            curl_close($curl);
                            
                            // update status setelah mengirim pesan
            
                            $item->update([
                                'status' => 'Broadcast Terkirim'
                            ]);
                        }
                    });
                    
                    return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
                }
            }else {
                # code...
                return redirect()->back()->with(['danger'=>'Masukan Terget Terlebih Dahulu']);
            }
        }else {
            # code...
            if ($broadc->target->count() > 0) {
                # code...
                if ($broadc->jenis_broadcast == 'image') {
                    # code...
                    // return $broadc->desc_broadcast. $broadc->url_img;
                    $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
                    ->chunk(10, function($targets) use ($broadc){
                        foreach ($targets as $key => $item) {
                            # code...
                            $curl = curl_init();
                            $token = "eIKm5nTO7bVZqA9K3IlpPLoZT05u4GoYex8fEWwDlgpZQwK3N7DUEBkBOKOKw00f";
                            $payload = [
                                "data" => [
                                    [
                                        'phone' => $item->telp_target,
                                        'image' => $broadc->url_img,
                                        'caption' => $broadc->desc_broadcast,
                                    ]
                                ]
                            ];
                            curl_setopt($curl, CURLOPT_HTTPHEADER,
                                array(
                                    "Authorization: $token",
                                    "Content-Type: application/json"
                                )
                            );
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
                            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/v2/send-image");
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        
                            $result = curl_exec($curl);
                            curl_close($curl);
        
                            $item->update([
                                'status' => 'Broadcast Terkirim'
                            ]);
                            
                            // print_r($result);
                            // exit();
                        }
                    });
                    return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
                }elseif($broadc->jenis_broadcast == 'dokumen'){
    
                    $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
                    ->chunk(10, function($targets) use ($broadc){
                        foreach ($targets as $key => $item) {
                            # code...
                            $curl = curl_init();
                            $token = "eIKm5nTO7bVZqA9K3IlpPLoZT05u4GoYex8fEWwDlgpZQwK3N7DUEBkBOKOKw00f";
                            $data = [
                                'phone' => $item->telp_target,
                                'document' => $broadc->url_img,
                                'caption' => 'TES',
                            ];
                            curl_setopt($curl, CURLOPT_HTTPHEADER,
                                array(
                                    "Authorization: $token",
                                )
                            );
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                            curl_setopt($curl, CURLOPT_URL,  "https://solo.wablas.com/api/send-document");
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    
                            $result = curl_exec($curl);
                            curl_close($curl);
        
                            $item->update([
                                'status' => 'Broadcast Terkirim'
                            ]);
                            
                            // print_r($result);
                            // exit();
                        }
                    });
                    return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
                    // return redirect()->back()->with(['danger'=>'URL Image kosong gunakan tombol broadcast yang lain']);
                }else {
                    # Text code...
                    $target = Target::where('broadcast_id', $broadcast_id)->where('status', null)->orWhere('status','')
                    ->chunk(10, function($targets) use ($broadc){
                        foreach ($targets as $key => $item) {
                            set_time_limit(0);
                            $curl = curl_init();
                            $token = "eIKm5nTO7bVZqA9K3IlpPLoZT05u4GoYex8fEWwDlgpZQwK3N7DUEBkBOKOKw00f";
                            $payload = [
                                "data" => [
                                    [
                                        'phone' => $item->telp_target,
                                        'message' => $broadc->desc_broadcast,
                                        'secret' => false, // or true
                                        'retry' => false, // or true
                                        'isGroup' => false, // or true
                                    ]
                                ]
                            
                            ];
                            
                            
                            curl_setopt($curl, CURLOPT_HTTPHEADER,
                                array(
                                    "Authorization: $token",
                                    "Content-Type: application/json"
                                )
                            );
                            
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
                            curl_setopt($curl, CURLOPT_URL, "https://solo.wablas.com/api/v2/send-message");
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                            $result = curl_exec($curl);
                            curl_close($curl);
                            
                            // update status setelah mengirim pesan
            
                            $item->update([
                                'status' => 'Broadcast Terkirim'
                            ]);
                        }
                    });
                    
                    return redirect()->back()->with(['success'=>'Broadcast berhasil dilakukan, harap tunggu dan cek secara berkala status target yang di broadcast']);
                }
            }else {
                # code...
                return redirect()->back()->with(['danger'=>'Masukan Terget Terlebih Dahulu']);
            }
        }                    
    }

    public function reset_status_target($broadcast_id)
    {
        $targets = Target::where('broadcast_id',$broadcast_id)->where('status','Broadcast Terkirim')->get();
        foreach ($targets as $key => $value) {
            # code...
            $value->update(
                [
                    'status'=>'',
                ]
            );
        }
        return redirect()->back()->with(['danger'=>'Status target berhasil direset, sekarang apabila anda menekan tombol broadcast maka seluruh target akan menerima pesan']);

    }
}
