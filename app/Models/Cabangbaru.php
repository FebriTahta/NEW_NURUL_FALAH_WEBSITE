<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabangbaru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_cabang','kepala_cabang','kadivre_cabang','alamat_cabang','kota_cabang','provinsi_cabang','telpon','email','kabupaten_id','provinsi_id','status_cabang'
    ];
    
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function wilayah()
    {
        return $this->belongsToMany(Wilayah::class);
    }

    public function lembaga()
    {
        return $this->hasMany(Lembaga::class);
    }
}
