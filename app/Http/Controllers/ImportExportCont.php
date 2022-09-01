<?php

namespace App\Http\Controllers;
use Excel;
use App\Models\Form;
use App\Models\Lembaga;
use App\Exports\TemplateSantri;
use App\Imports\ImportTemplateSantri;
use Illuminate\Http\Request;

class ImportExportCont extends Controller
{
    public function download_template_santri()
    {
        return Excel::download(new TemplateSantri(), 'template-data-santri.xlsx');
    }

    public function upload_template_santri(Request $request)
    {
        
        $form = Form::findOrFail($request->form_id);
        $form_id = $form->id;

        $lembaga = Lembaga::findOrFail($request->lembaga_id);
        $lembaga_id = $lembaga->id;

        // $data = Excel::import(new ImportTemplateSantri($form_id,$lembaga_id),request()->file('file'));
        $file = $request->file('file')->store('import');

        $import = new ImportTemplateSantri($form_id,$lembaga_id);
        $import->import($file);

        // dd($import->errors());

        // if ($import->failures()->isNotEmpty()) {
        //     return back()->withFailures($data->failures());
        // }


        return back()->withStatus('ya.');
        
        
        // if(request()->ajax())
        // {
        //     return Response()->json([
        //         'data' => $data,
        //         'success'=> 'Santri Diproses'
        //     ]);
        // }
    }
}
