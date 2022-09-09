<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lembaga','provinsi_id','kabupaten_id','kecamatan_id','kelurahan_id','alamat','jenis_pendidikan','jenjang_pendidikan','slug_lembaga','sertifi_number'
        ,'cabangbaru_id','telp_lembaga'
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function santri()
    {
        return $this->hasMany(Santri::class);
    }

    public function cabangbaru()
    {
        return $this->belongsTo(Cabangbaru::class);
    }
}
