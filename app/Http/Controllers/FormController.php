<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Grouppertanyaan;
use App\Models\Form;
use App\Models\Wilayah;
use App\Models\Lembaga;
use App\Models\Cabangbaru;
use App\Models\Santri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DataTables;
use Carbon;
use QrCode;
use PDF;
use Validator;

class FormController extends Controller
{
    public function index_daftar_form(Request $request){

        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        $forms    = Form::get();
        return view('backend_new.daftar_form',compact('activity','forms'));
    }

    public function create_new_form(Request $request)
    {
        if ($request->id == null) {
            # create new form code...
            # if exist
            $exist = Form::where('slug_form', $request->slug_form)->first();
            if ($exist !== null) {
                # exist code...
                return redirect()->back()->with(['danger' => 'Form dengan slug (link /url) sudah dibuat, silahkan isikan kolom slug dengan link / url yang belum pernah dibuat']);
            }else {
                # new code...
                if ($request->img_form !== null) {
                    # code...
                    $filename1   = time().'.'.$request->img_form->getClientOriginalExtension();
                    $request->img_form->move(public_path('img/img_form/'), $filename1);
                    
                    $data   = Form::updateOrCreate(
                        [
                            'id' => $request->id
                        ],
                        [
                            'nama_form'             => $request->nama_form,
                            'img_form'              => asset('img/img_form/'.$filename1),
                            'jenis_form'            => $request->jenis_form,
                            'slug_form'             => $request->slug_form,
                            'tipe'                  => $request->tipe,
                        ]
                    );
                    return redirect()->back()->with(['success' => 'Form baru berhasil dibuat']);
                }else {
                    # code...
                    $data   = Form::updateOrCreate(
                        [
                            'id' => $request->id
                        ],
                        [
                            'nama_form'             => $request->nama_form,
                            'jenis_form'            => $request->jenis_form,
                            'slug_form'             => $request->slug_form,
                            'tipe'                  => $request->tipe,
                        ]
                    );
                    return redirect()->back()->with(['success' => 'Form baru berhasil dibuat']);
                }
            }
        }else {
            # update data code...
            // $form_before = Form::findOrFail($request->id);
            $exist = Form::where('slug_form', $request->slug_form)->first();
            if ($exist == null) {
                # jika id yang sama dengan link yang sudah ada sama, maka boleh tetap sama code...

                if ($request->img_form !== null) {
                    $filename1   = time().'.'.$request->img_form->getClientOriginalExtension();
                    $request->img_form->move(public_path('img/img_form/'), $filename1);
                    # code...
                    $data   = Form::updateOrCreate(
                        [
                            'id' => $request->id
                        ],
                        [
                            'nama_form'             => $request->nama_form,
                            'img_form'              => asset('img/img_form/'.$filename1),
                            'jenis_form'            => $request->jenis_form,
                            'slug_form'             => $request->slug_form,
                            'tipe'                  => $request->tipe,
                        ]
                    );
                    return redirect()->back()->with(['success' => 'Form baru berhasil diupdate']);

                }else {
                    # code...
                    $data   = Form::updateOrCreate(
                        [
                            'id' => $request->id
                        ],
                        [
                            'nama_form'             => $request->nama_form,
                            'jenis_form'            => $request->jenis_form,
                            'slug_form'             => $request->slug_form,
                            'tipe'                  => $request->tipe,
                        ]
                    );
                    return redirect()->back()->with(['success' => 'Form baru berhasil diupdate']);
                }
            }else {
                # link / url sudah dipakai oleh form lain code...
                return redirect()->back()->with(['danger' => 'Form dengan slug (link /url) sudah dibuat, silahkan isikan kolom slug dengan link / url yang belum pernah dibuat']);
            }
        }
        
    }

    public function remove_form(Request $request)
    {
        $gambar = substr($request->img_form, -15);
        $id     = $request->id;

        $form   = Form::where('id', $id)->first();
        if (count($form->grouppertanyaan) > 0) {
            # code...
            return redirect()->back()->with(['danger'=>'Form tidak dapat dihapus karena terdapat pertanyaan didalamnya']);
        }else {
            # code...
            if ($gambar !== null) {
                # code remove image form...
                unlink('img/img_form/'.$gambar); // correct & remove
                $form->delete();
            }else {
                # code...
                $form->delete();
            }
            return redirect()->back()->with(['danger'=>'Form berhasil dihapus']);
        }
        
    }

    public function index_form_fe($slug_form)
    {
        $form = Form::where('slug_form',$slug_form)->first();
        
        if ($form->grouppertanyaan->count() > 0) {
            # code...
            $grouppertanyaan = Grouppertanyaan::where('form_id', $form->id)->get();
            return view('form.form_lembaga',compact('form','grouppertanyaan'));
        }else {
            # code...
            return view('form.form_lembaga',compact('form'));
        }
    }

    public function display_sertifikat($slug_form, $lembaga_id)
    {
        $form = Form::where('slug_form', $slug_form)->first();
        $lembaga = Lembaga::where('id', $lembaga_id)->first();
        $date = \Carbon\Carbon::parse($lembaga->created_at)->locale('id');
        $no_sertifikat = $lembaga->sertifi_number.'/'.$date->format('Y').'/'.$lembaga->kabupaten_id;
        $qrcode = base64_encode(QrCode::size(300)->generate('https://nurulfalah.org/validasi-lembaga/'.$lembaga->sertifi_number));
        $data = [
            'nama_lembaga' => $lembaga->nama_lembaga,
            'alamat' => $lembaga->alamat,
            'kabupaten' => $lembaga->kabupaten->nama_kabupaten,
            'tanggal'   => $date->format('j F Y'),
            'no'        => $no_sertifikat,
            'qrcode'    => $qrcode,
        ];
        $qr = "<img src='data:image/png;base64," . $qrcode . "'>";
        return view('form.sertifikat_display',compact('form','lembaga','data', 'qr'));
    }

    public function download_sertifikat($id)
    {
        $lembaga = Lembaga::findOrFail($id);

        $date = \Carbon\Carbon::parse($lembaga->created_at)->locale('id');
        $date->settings(['formatFunction' => 'translatedFormat']);
        $no_sertifikat = $lembaga->sertifi_number.'/'.$date->format('Y').'/'.$lembaga->kabupaten_id;

        $qrcode = base64_encode(QrCode::size(300)->generate('https://nurulfalah.org/validasi-lembaga/'.$lembaga->sertifi_number));
        $data = [
            'nama_lembaga' => $lembaga->nama_lembaga,
            'alamat' => $lembaga->alamat,
            'kabupaten' => $lembaga->kabupaten->nama_kabupaten,
            'tanggal'   => $date->format('j F Y'),
            'no'        => $no_sertifikat,
            'qrcode'    => $qrcode,
        ];
          
        $customPaper = array(0,0,865,612);
    	$pdf = PDF::loadView('form.sertifikat', compact('data'))->setPaper($customPaper, 'portrait');
    	return $pdf->stream('sertifikat.pdf','I');
    }

    public function form_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_santri'  => 'required|max:100',
            'tempat_lahir'  => 'required',
            'tanggal_lahir'  => 'required',
            'bulan_lahir'  => 'required',
            'tahun_lahir'  => 'required',
            'nama_ortu'  => 'required',
            'hp_ortu'  => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Pastikan Seluruh Data Sudah Terisi Dengan Benar',
                'errors' => $validator->messages(),
            ]);

        }else {

            if ($request->tanggal_lahir > 31 && $request->tahun_lahir > date('Y') || $request->tahun_lahir < 1900) {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Tanggal lahir dan tahun lahir salah, harap periksa kembali',
                ]);

            }elseif($request->tanggal_lahir > 31) {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Tanggal lahir salah, harap periksa kembali',
                ]);

            }elseif($request->tahun_lahir > date('Y') || $request->tahun_lahir < 1900) {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Tahun lahir salah, harap periksa kembali',
                ]);

            }elseif(strlen($request->hp_ortu) < 10 || strlen($request->hp_ortu) > 13 || substr($request->hp_ortu,0,2) !== '08') {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Periksa kembali nomor telpon yang didaftarkan',
                ]);

            }
            else{
                # code...
                return response()->json([
                    'status' => 200,
                    'message'  => substr($request->hp_ortu,0,2),
                ]);
            }
        }
        
    }

    public function data_lembaga(Request $request, $kabupaten_id, $kecamatan_id)
    {
        if ($request->ajax()) {
            # code...
            $data   = Lembaga::where('kabupaten_id', $kabupaten_id)->where('kecamatan_id', $kecamatan_id)->get();
            if ($data->count() > 0) {
                # code...
                // message
                return response()->json([
                    'status' => 200,
                    'message'  => 'Menampilkan '.$data->count().' Lembaga',
                ]);

            }else{
                // message
                return response()->json([
                    'status' => 400,
                    'message'  => 'Belum ada lembaga yang mendaftar. Lembaga tidak ditemukan',
                ]);
            }
        }
    }

    public function data_lembaga_tabel(Request $request, $kabupaten_id, $kecamatan_id,$slug_form)
    {
        if ($request->ajax()) {
            # code...
            $form    = Form::where('slug_form', $slug_form)->first();
            $datas   = Lembaga::where('kabupaten_id', $kabupaten_id)->where('kecamatan_id', $kecamatan_id)->get();
                return DataTables::of($datas)->addColumn('action', function($datas) use ($form){
                    return '<a class="btn btn-sm btn-info fa fa-forward" href="/survey-lembaga/'.$form->slug_form.'/'.$datas->slug_lembaga.'"></a>';
                })    
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function mendaftar_lembaga($kabupaten_id, $kecamatan_id,$slug_form)
    {
        $form = Form::where('slug_form', $slug_form)->first();
        $kabupaten = Kabupaten::findOrFail($kabupaten_id);
        $kecamatan = Kecamatan::findOrFail($kecamatan_id);
        return view('form.form_lembaga_create',compact('form','kabupaten','kecamatan'));
    }

    public function lembaga_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cabangbaru_id' => 'required',
            'telp_lembaga'  => 'required',
            'nama_lembaga'  => 'required|max:100',
            'alamat'        => 'required',
            'jenis_pendidikan'      => 'required',
            'jenjang_pendidikan'    => 'required',
            'kabupaten_id'  => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Pastikan Seluruh Data Sudah Terisi Dengan Benar',
                'errors' => $validator->messages(),
            ]);

        }else {

            $number = mt_rand(100000, 900000);
            $exists = Lembaga::where('sertifi_number', $number)->exists();
            if ($exists) {
                # jika exists code...
                return lembaga_store();
            }else {
                # code...
                $lembaga = Lembaga::where('cabangbaru_id', $request->cabangbaru_id)->where('kabupaten_id', $request->kabupaten_id)->where('telp_lembaga',$request->telp_lembaga)
                              ->where('nama_lembaga', $request->nama_lembaga)->where('jenjang_pendidikan', $request->jenjang_pendidikan)
                              ->where('jenis_pendidikan', $request->jenis_pendidikan)->first();
                $kabupaten = Kabupaten::findOrFail($request->kabupaten_id);
                if ($lembaga == null) {
                    # code...
                    $data = Lembaga::updateOrCreate(
                        [
                            'id' => $request->id,
                        ],
                        [
                            'cabangbaru_id' => $request->cabangbaru_id,
                            'sertifi_number' => $number,
                            'nama_lembaga'  => $request->nama_lembaga,
                            'alamat'  => $request->alamat,
                            'jenis_pendidikan'  => $request->jenis_pendidikan,
                            'jenjang_pendidikan'  => $request->jenjang_pendidikan,
                            'provinsi_id'   => $kabupaten->provinsi_id,
                            'kabupaten_id'  => $request->kabupaten_id,
                            'telp_lembaga'  => $request->telp_lembaga,
                            'kecamatan_id'  => $request->kecamatan_id,
                            'slug_lembaga'  => Str::slug($request->nama_lembaga),
                        ]
                    );

                    return response()->json([
                        'status' => 200,
                        'message'=> 'Lembaga anda berhasil didaftarkan, Beralih ke tahap selanjutnya',
                        'lembaga'=> $data->slug_lembaga
                    ]);

                }else{
                    # code...
                    return response()->json([
                        'status' => 401,
                        'message'  => 'Lembaga anda sudah pernah didaftarkan. silahkan cari lembaga anda pada tabel dibawah ini',
                        'errors' => $validator->messages(),
                    ]);
                }
            }
            
        }
    }

    public function lembaga_santri($slug_form, $slug_lembaga)
    {
        $form = Form::where('slug_form', $slug_form)->first();
        $lembaga = Lembaga::where('slug_lembaga', $slug_lembaga)->first();
        // $santri = $lembaga->santri->count();
        // if ($santri > 0) {
        //     # code...
        //     $last_santri = Santri::where('lembaga_id', $lembaga->id)->orderBy('updated_at','desc')->first();
        //     $las_update_santri = \Carbon\Carbon::parse($last_santri->updated_at)->format('F Y');
        //     return view('form.form_lembaga_santri',compact('form','lembaga','santri','las_update_santri'));
        // }else{
        //     return view('form.form_lembaga_santri',compact('form','lembaga','santri'));
        // }
        // $last_santri = Santri::where('lembaga_id', $lembaga->id)->orderBy('updated_at','desc')->first();
        // $las_update_santri = \Carbon\Carbon::parse($last_santri->updated_at)->format('F Y');
        return view('form.form_lembaga_santri',compact('form','lembaga'));
    }

    public function store_santri(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_santri'  => 'required|max:100',
            'tempat_lahir'        => 'required',
            'tanggal'      => 'required',
            'bulan'    => 'required',
            'tahun'  => 'required',
            'jenis_kelamin'  => 'required',
            'nama_ortu'  => 'required',
            'hp_ortu'  => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Pastikan Anda Mengisi Seluruh Data',
                'errors' => $validator->messages(),
            ]);

        }else {

            $tanggal;
            $tanggal_lahir;
            if ($request->tanggal > 31 || $request->tahun > date('Y') || $request->tahun < 1950) {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Periksa Tahun & Tanggal Lahir Anda',
                ]);
            }else{
                
                if(strlen($request->tanggal) == 1)
                {
                    $tanggal = '0'.$request->tanggal;
                    $tanggal_lahir = $request->tahun.'-'.$request->bulan.'-'.$tanggal;
                }else{
                    $tanggal_lahir = $request->tahun.'-'.$request->bulan.'-'.$request->tanggal;
                }

                $valid_hp = strlen(''.$request->hp_ortu.'');
                if($valid_hp < 10 || $valid_hp > 13 || substr($request->hp_ortu,0,2) !== '08')
                {
                    # code...
                    return response()->json([
                        'status' => 400,
                        'message'  => 'harap isikan nomor HP dengan benar & diawali 08' ,
                    ]);

                }else {
                    # code...
                    $hp_exist = Santri::where('hp_ortu', $request->hp_ortu)->exists();
                    if ($hp_exist) {
                        # code...
                        return response()->json([
                            'status' => 400,
                            'message'  => 'Nomor Hp tersebut sudah pernah didaftarkan!' ,
                        ]);
                    }else{
                        $data = Santri::updateOrCreate(
                            [
                                'id'=> $request->id
                            ],
                            [
                                'lembaga_id' => $request->lembaga_id,
                                'form_id' => $request->form_id,
                                'nama_santri'=>$request->nama_santri,
                                'tempat_lahir'=>$request->tempat_lahir,
                                'tanggal_lahir'=>$tanggal_lahir,
                                'jenis_kelamin'=> $request->jenis_kelamin,
                                'nama_ortu'=> $request->nama_ortu,
                                'hp_ortu'=> $request->hp_ortu,
                            ]
                        );
        
                        return response()->json([
                            'status' => 200,
                            'message'  => 'Santri berhasil didaftarkan',
                        ]);
                    }
                }
            }

        }
    }

    public function daftar_lembaga(Request $request, $wilayah_id, $slug_form, $cabang_id)
    {
        $form = Form::where('slug_form', $slug_form)->first();
        $wilayah_id = \Crypt::decrypt($wilayah_id);
        $wilayah = Wilayah::findOrFail($wilayah_id);
        $cabang = Cabangbaru::findOrFail($cabang_id);
        // $lembaga = Lembaga::where('cabangbaru_id',$cabang_id)->where('kabupaten_id', $wilayah_id)->count();

        $lembaga = Lembaga::count();
        // return $lembaga;
        return view('form.form_daftar_lembaga',compact('wilayah_id','form','wilayah','cabang','lembaga'));
    }   

}
