<?php

namespace App\Imports;
use App\Models\Guru;
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

class ImportTemplateGuru implements 
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

    public function __construct($lembaga_id)
    {
        $this->lembaga_id=$lembaga_id;
    }

    public function collection(Collection $rows)
    {

        Guru::where('lembaga_id', $this->lembaga_id)->delete();

        foreach ($rows as $row) {

            $exist = Guru::where('lembaga_id', $this->lembaga_id)->where('nama_guru',$row['nama'])->where('tempat_lahir_guru',$row['tempat_lahir_guru'])->first();
            
            if (is_numeric($row['tanggal_lahir_guru']) !== false) {
                # code...
                $tgllahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir_guru']);
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

            Guru::updateOrCreate(
                [
                    'id' => $id,
                ]
                ,[
                    'lembaga_id' => $this->lembaga_id,
                    'nama_guru'=> $row['nama'],
                    'tempat_lahir_guru' => $row['tempat_lahir_guru'],
                    'tanggal_lahir_guru'=> $row['tanggal_lahir_guru'],
                    'jenis_kelamin_guru'=> $row['gender'],
                    'telp_guru'=> $row['telp_guru'],
                ]
            );
            
        }
    }

    public function rules(): array
    {
        return [
            'nama'=>'required',
            'tempat_lahir_guru'=>'required',
            'tanggal_lahir_guru'=>'required',
            'gender'=>'required',
            'telp_guru'=>'required',
        ];
    }
}
