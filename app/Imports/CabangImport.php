<?php

namespace App\Imports;
use App\Models\Cabangbaru;
use App\Models\Kabupaten;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CabangImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            # code...
            if ($key >= 1) {
                # code...

                $dt_cab                 = new Cabangbaru;
                $dt_cab->nama_cabang    = $row[0];
                $dt_cab->status_cabang  = $row[1];
                $dt_cab->alamat_cabang  = $row[7];

                //inisialisasi kota / kabupaten yang diinput
                $kab     = strtoupper($row[3]);
                $kab_kab = 'KAB. '.$kab;
                $kab_kot = 'KOTA '.$kab;
                $tes_kab = Kabupaten::select('*')->whereIn('nama_kabupaten',[$kab_kab])->first();
                $tes_kot = Kabupaten::select('*')->whereIn('nama_kabupaten',[$kab_kot])->first();
                //proses logika untuk mendapatkan kabupaten id & menginput provinsi id otomatis dari kabupaten
                if ($tes_kab !== null) {
                    # code...
                    $kabupaten_id = $tes_kab->id;
                    $dt_cab->kabupaten_id = $kabupaten_id;
                    $dt_cab->provinsi_id = $tes_kab->provinsi->id;
                } 
                if ($tes_kot !== null) {
                    # code...
                    $kabupaten_id = $tes_kot->id;
                    $dt_cab->kabupaten_id = $kabupaten_id;
                    $dt_cab->provinsi_id = $tes_kot->provinsi->id;
                }
                //lanjut protses insert data
                $dt_cab->provinsi_cabang= $row[2];
                $dt_cab->kota_cabang    = $row[3];
                $dt_cab->kepala_cabang  = $row[4];
                $dt_cab->kadivre_cabang = $row[5];
                $dt_cab->email          = $row[6];
                $dt_cab->telpon         = $row[8];
                // $dt_cab->nfmap      = $row[9];
                $dt_cab->created_at = new \DateTime;
                $dt_cab->save();
            }   
        }
    }
}
