<?php

namespace App\Imports;
use App\Models\Target;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\ToCollection;

class TargetImport implements ToCollection, WithChunkReading, ShouldQueue, WithStartRow
{
    /**
    * @param Collection $collection
    */

    public function __construct($broadcast_id)
    {
        $this->broadcast_id=$broadcast_id;
    }

    public function startRow(): int
    {
        return 1;
    }

    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key > 0) {
                # code...
                $exist = Target::where('broadcast_id', $this->broadcast_id)->where('telp_target', $row[1])->first();
                if ($exist == null) {
                    # code...
                    $target = new Target;
                    $target->broadcast_id =$this->broadcast_id;
                    $target->nama_target = $row[0];
                    if ($row !== 0 || $row !== '' || $row !== null) {
                        # code...
                        $target->telp_target = $row[1];
                    }
                    $target->save();
                }
                
            }
            
        }
    }

    // public function model(array $row)
    // {
    //     return new Target([
    //         'broadcast_id'=>$this->broadcast_id,
    //         'nama_target' => $row[0],
    //         'telp_target' => $row[1],
    //     ]);
    // }

    public function chunkSize(): int
    {   
        return 1000;
    }
}
