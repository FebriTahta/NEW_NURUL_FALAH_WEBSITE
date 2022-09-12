<?php

namespace App\Http\Controllers;
use Excel;
use App\Models\Form;
use App\Models\Lembaga;
use App\Exports\TemplateSantri;
use App\Exports\TemplateGuru;
use App\Imports\ImportTemplateSantri;
use App\Imports\ImportTemplateGuru;
use Illuminate\Http\Request;

class ImportExportCont extends Controller
{
    public function download_template_santri()
    {
        return Excel::download(new TemplateSantri(), 'template-data-santri.xlsx');
    }

    public function download_template_guru()
    {
        return Excel::download(new TemplateGuru(), 'template-data-guru.xlsx');
    }

    public function upload_template_guru(Request $request)
    {
        $lembaga = Lembaga::findOrFail($request->lembaga_id);
        $lembaga_id = $lembaga->id;

        $file = $request->file('file')->store('import');

        $import = new ImportTemplateGuru($lembaga_id);
        $import->import($file);

        return back()->withStatus('Data guru berhasil di update. Untuk data yang tidak lengkap akan dilewati');
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


        return back()->withStatus('Data santri berhasil di update. Untuk data yang tidak lengkap akan dilewati');
        
        
        // if(request()->ajax())
        // {
        //     return Response()->json([
        //         'data' => $data,
        //         'success'=> 'Santri Diproses'
        //     ]);
        // }
    }
}
