<?php

namespace App\Http\Controllers;
use DataTables;
use Validator;
use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function backend_youtube(Request $request)
    {
        if ($request->ajax()) {
            $data = Youtube::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addColumn('action', function($data){
                    $actionBtn = ' <a data-toggle="modal" data-target="#modaledit" data-id="'.$data->id.'" data-name="'.$data->name.'" data-link="'.$data->link.'"
                    data-src="'.asset('img_socmed/'.$data->img).'" data-img="'.$data->img.'" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-img="'.$data->img.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        };
        return view('backend.youtube');
    }

    public function backend_add_youtube(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
            'link'     => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
        
            Youtube::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'name' => $request->name,
                    'link' => $request->link,
                ]
            );
        

            return response()->json(
                [
                'status'  => 200,
                'message' => 'Youtube has been Added'
                ]
            );
        }
    }

    public function backend_remove_youtube(Request $request)
    {
        Youtube::find($request->id)->delete();
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Youtube has been Deleted'
            ]
        );
    }
}
