<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Validator;
use File;
use Image;
use App\Models\Posting;
use DataTables;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function backend_slider_list(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = Slider::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('images',function($data){
                    $image = '<img src="'.asset('image_sldr/'.$data->image).'" style="max-width:100px" alt="">';
                    return $image;
                })
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-toggle="modal" data-target="#modaladd" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i>Edit</button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i>Remove</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','images'])
                ->make(true);
        }
        $activity = Posting::orderBy('created_at','desc')->limit(8)->get();
        return view('backend_new.slider',compact('activity'));
    }

    public function createThumbnailSlider($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }

    public function backend_slider_total(Request $request)
    {
        $total = Slider::count();
        if ($total > 0) {
            # code...
            return response()->json([
                'status' => 200,
                'message' => 'Menampilkan total slide',
                'total' => $total,
            ]);
        }else {
            # code...
            return response()->json([
                'status' => 400,
                'message' => 'Slider kosong',
                'total' => $total,
            ]);
        }
    }

    public function backend_slider_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'       => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
 
        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => $validator->messages().'',
            ]);

        }else {
            if($request->hasFile('image')) {

                if ($request->id !== null) {
                    # code...
                    $exist = Slider::findOrFail($request->id);
                    if ($exist) {
                        # code...
                        if(File::exists(public_path('sldr_image/'.$exist->image)))
                        {
                            File::delete(public_path('sldr_image/'.$exist->image));
                        }

                        if(File::exists(public_path('image_sldr/'.$exist->image)))
                        {
                            File::delete(public_path('image_sldr/'.$exist->image));
                        }
                    }
                }

                $filename    = time().'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move('sldr_image/',$filename);
                $thumbnail   = $filename;
                File::copy(public_path('sldr_image/'.$filename), public_path('image_sldr/'.$thumbnail));
                
                $largethumbnailpath = public_path('sldr_image/'.$thumbnail);
                $this->createThumbnailSlider($largethumbnailpath, 1900, 1000);

                $data = Slider::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'image'=> $filename,
                        'thumbnail' => $filename,
                    ]
                );

                return response()->json([
                    'status' => 200,
                    'message' => 'Upload slider sukses'
                ]);
            }
        }
    }

    public function remove_slider(Request $request)
    {
        if ($request->ajax()) {
            $exist = Slider::findOrFail($request->id);
            if ($exist) {
                # code...
                if(File::exists(public_path('image_sldr/'.$exist->image)))
                {
                    File::delete(public_path('image_sldr/'.$exist->image));
                }
                if(File::exists(public_path('sldr_image/'.$exist->image)))
                {
                    File::delete(public_path('sldr_image/'.$exist->image));
                }

                $exist->delete();
                return response()->json([
                        'status' => 200,
                        'message' => 'Slider telah dihapus'
                ]);
            }else {
                # code...
                return response()->json(
                    [
                        'status' => 400,
                        'message'=> ['Slider Syirkah Tidak Ditemukan'],
                    ]
                );
            }
        }
    }
}
