<?php

namespace App\Imports;
use App\Models\Wilayah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class WilayahCabangImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            $kabupaten   = Wilayah::where('id', $row[0])->first();

            if ($kabupaten == null) {
                # Provinsi baru code...
                $dt_kab = new Wilayah;
                $dt_kab->id = $row[0];
                $dt_kab->provinsi_id = $row[1];
                $dt_kab->nama_wilayah = $row[2];
                $dt_kab->save();
            }else {
                # code...
                # do something else here if provinsi was exist
            }

        }
    }
}
