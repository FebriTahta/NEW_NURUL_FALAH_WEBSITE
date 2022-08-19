<?php

namespace App\Http\Controllers;
use App\Models\Pertanyaan;
use App\Models\Grouppertanyaan;
use App\Models\Posting;
use App\Models\Form;
use App\Models\Pilihan;
use DataTables;
use Validator;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index_daftar_pertanyaan($grouppertanyaan_id, Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data   = Pertanyaan::where('grouppertanyaan_id', $grouppertanyaan_id)->orderBy('id', 'asc')->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $actionBtn = ' <button data-id="'.$data->id.'" data-pertanyaan="'.$data->pertanyaan.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                $actionBtn.= ' <a data-target="#modaldelp" data-pertanyaan="'.$data->pertanyaan.'" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                return $actionBtn;
            })
            ->addColumn('pilihan', function($data){
                $pilihan = [];
                foreach ($data->pilihan as $key => $value) {
                    # code...
                    $pilihan[] = $value->nama_pilihan;
                }
                return implode('<br>',$pilihan);
            })
            ->rawColumns(['action','pilihan'])
            ->make(true);
        }
        
    }

    public function create_new_pertanyaan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'grouppertanyaan_id'    => 'required',
            "jenis_pertanyaan"      => "required",
            'pertanyaan'            => 'required',
        ]);

        $jenis_pertanyaan = $request->jenis_pertanyaan;
        $grouppertanyaan_id = $request->grouppertanyaan_id;

        if($jenis_pertanyaan == 'text' || $jenis_pertanyaan == 'textarea')
        {

            $data = Pertanyaan::updateOrCreate(
                [
                    'id'=> $request->id,
                ],
                [
                    'grouppertanyaan_id'    => $grouppertanyaan_id,
                    'jenis_pertanyaan'      => $jenis_pertanyaan,
                    'pertanyaan'            => $request->pertanyaan
                ]
            );

            return response()->json(
                [
                  'data'    => $data,
                  'status'  => 200,
                  'message' => 'Pertanyaan berhasil ditambahkan'
                ]
            );

        }elseif ($jenis_pertanyaan == 'radio' || $jenis_pertanyaan == 'check' || $jenis_pertanyaan == 'combo') {
            # code...
            $validator = Validator::make($request->all(), [
                'nama_pilihan.*'    => 'required|distinct|min:2',
                'nilai_pilihan.*'    => 'required|distinct|min:2',
            ]);

            
            if ($validator->fails()) {

                return response()->json([
                    'status' => 400,
                    'message'  => 'Response Gagal Lengkapi Pertanyaan Jangan Ada yang Kosong / Kembar',
                    'errors' => $validator->messages(),
                ]);

            }else {

                $data = Pertanyaan::updateOrCreate(
                    [
                        'id'=> $request->id,
                    ],
                    [
                        'grouppertanyaan_id'    => $grouppertanyaan_id,
                        'jenis_pertanyaan'      => $jenis_pertanyaan,
                        'pertanyaan'            => $request->pertanyaan
                    ]
                );

                for ($i = 0; $i < count($request->nama_pilihan); $i++) {
                    $pilihan[] = [
                        'pertanyaan_id'    => $data->id,
                        'nama_pilihan'     => $request->nama_pilihan[$i],
                        'nilai_pilihan'    => $request->nilai_pilihan[$i]
                    ];
                }

                $data = Pilihan::insert($pilihan);
                
                return response()->json(
                    [
                      'data'    => $data,
                      'status'  => 200,
                      'message' => 'Pertanyaan berhasil ditambahkan'
                    ]
                );
            }

        }else{

            return response()->json(
                [
                  'data'    => 'Tipe Tidak Diketahui',
                  'status'  => 400,
                  'message' => 'Tipe Tidak Diketahui'
                ]
            );
        }
    }

    public function remove_pertanyaan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'       => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            if(isset($request->id)){
                Pertanyaan::findOrFail($request->id)->delete();
                return response()->json([
                    'status' => 200,
                    'message'  => 'Pertanyaan berhasil dihapus',
                    'errors' => $validator->messages(),
                ]);
            }else {
                # code...
                return response()->json([
                    'status' => 200,
                    'message'  => 'Pertanyaan tersebut tidak ditemukan',
                    'errors' => $validator->messages(),
                ]);
            }
        }
    }

    public function index_group_pertanyaan($slug_form, Request $request)
    {
        $form = Form::where('slug_form', $slug_form)->first();
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $group = Grouppertanyaan::where('form_id', $form->id)->get();
        $pertanyaan = [];
        foreach ($group as $key => $value) {
            # code...
            $pertanyaan[] = $value->pertanyaan->count();
        }
        $total_pertanyaan = array_sum($pertanyaan);
        $total_group = Grouppertanyaan::where('form_id', $form->id)->count();

        if ($request->ajax()) {
            # code...
            $data   = Grouppertanyaan::where('form_id', $form->id)->orderBy('id', 'asc')->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $actionBtn = ' <button data-id="'.$data->id.'" data-nama_group="'.$data->nama_group.'" data-toggle="modal" data-target="#modaladdper" class="delete btn btn-success btn-sm"><i class="text-white fa fa-plus"></i></button>';
                $actionBtn.= ' <button data-id="'.$data->id.'" data-nama_group="'.$data->nama_group.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                $actionBtn.= ' <a data-target="#modaldel" data-nama_group="'.$data->nama_group.'" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                
                return $actionBtn;
            })
            ->addColumn('pertanyaan', function($data){
                $actionBtn = '<a href="#" data-toggle="modal" data-target="#modal-pertanyaan" data-nama_group="'.$data->nama_group.'"
                data-id="'.$data->id.'">'.$data->pertanyaan->count().' Pertanyaan</a>';
                return $actionBtn;
            })
            ->rawColumns(['action','pertanyaan'])
            ->make(true);
        }
        
        return view('backend_new.daftar_pertanyaan',compact('activity', 'total_pertanyaan', 'total_group','form'));
    }

    public function create_new_grouppertanyaan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'form_id'       => 'required',
            'nama_group'    => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            Grouppertanyaan::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'form_id'=>$request->form_id,
                    'nama_group'=>$request->nama_group,
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Pertanyaan berhasil ditambahkan'
                ]
            );
        }
    }

    public function remove_grouppertanyaan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'       => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            if(isset($request->id)){
                Grouppertanyaan::findOrFail($request->id)->delete();
                return response()->json([
                    'status' => 200,
                    'message'  => 'Group Pertanyaan berhasil dihapus',
                    'errors' => $validator->messages(),
                ]);
            }else {
                # code...
                return response()->json([
                    'status' => 200,
                    'message'  => 'Group Pertanyaan tersebut tidak ditemukan',
                    'errors' => $validator->messages(),
                ]);
            }
        }
    }
}
