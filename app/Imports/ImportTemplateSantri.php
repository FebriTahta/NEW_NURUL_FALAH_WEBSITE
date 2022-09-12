<?php

namespace App\Imports;
use App\Models\Santri;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class ImportTemplateSantri implements 
    ToCollection,
    WithHeadingRow,
    SkipsOnError,
    WithValidation,
    SkipsOnFailure,
    // WithChunkReading,
    // ShouldQueue,
    WithEvents
{
    use Importable, SkipsErrors, 
    SkipsFailures,
    RegistersEventListeners;
    /**
    * @param Collection $collection
    */
    public function __construct($form_id, $lembaga_id)
    {
        $this->form_id=$form_id;
        $this->lembaga_id=$lembaga_id;
    }

    public function collection(Collection $rows)
    {

        Santri::where('lembaga_id', $this->lembaga_id)->delete();

        foreach ($rows as $row) {

            $exist = Santri::where('lembaga_id', $this->lembaga_id)->where('nama_santri',$row['nama'])->where('nama_ortu',$row['nama_ortu'])->first();
            
            if (is_numeric($row['tanggal_lahir']) !== false) {
                # code...
                $tgllahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir']);
            }else {
                # code...
                $tgllahir="";
            }

            $id = 0;
            if ($exist == null) {
                # code...
                $id = 0;
            }else {
                # code...
                $id = $exist->id;
            }

            Santri::updateOrCreate(
                [
                    'id' => $id,
                ]
                ,[
                'form_id' => $this->form_id,
                'lembaga_id' => $this->lembaga_id,
                'nama_santri' => $row['nama'],
                'tempat_lahir' => $row['tempat_lahir'],
                'tanggal_lahir' => $tgllahir,
                'jenis_kelamin' => $row['gender'],
                'nama_ortu' => $row['nama_ortu'],
                'hp_ortu' => $row['hp_ortu'],
                ]
            );
            
        }
    }

    public function rules(): array
    {
        return [
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'gender'=>'required',
            'nama_ortu'=>'required',
            'hp_ortu'=>'required',
        ];
    }

    // public function rules(): array
    // {
    //     return [
    //         '1' => ['required'],
    //         '2' => ['required'],
    //         '3' => ['required'],
    //         '4' => ['required'],
    //         '5' => ['required'],
    //         '6' => ['required'],
    //     ];
    // }

    // public function customValidationAttributes()
    // {
    //     return [
    //         '1' => 'nama santri',
    //         '2' => 'tempat lahir',
    //         '3' => 'tanggal lahir',
    //         '4' => 'jenis kelamin',
    //         '5' => 'nama ortu',
    //         '6' => 'nomor hp ortu'
    //     ];
    // }

    // public function chunkSize(): int
    // {
    //     return 1000;
    // }

    // public static function afterImport(AfterImport $event)
    // {
    // }

    // public function onFailure(Failure ...$failure)
    // {
    // }
}
