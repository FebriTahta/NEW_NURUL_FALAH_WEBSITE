<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Grouppertanyaan;
use App\Models\Form;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
                            'slug_form'             => $request->slug_form
                        ]
                    );
                    return redirect()->back()->with(['success' => 'Form baru berhasil dibuat']);
                }
            }
        }else {
            # update data code...
            $form_before = Form::findOrFail($request->id);
            $exist = Form::where('slug_form', $request->slug_form)->first();
            if ($form_before->id == $exist->id) {
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
                            'slug_form'             => $request->slug_form
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
        if (count($form->pertanyaan) > 0) {
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
        $grouppertanyaan = Grouppertanyaan::where('form_id', $form->id)->get();
        return view('form.index',compact('form','grouppertanyaan'));
    }
}
