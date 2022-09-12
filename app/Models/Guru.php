<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'lembaga_id','nama_guru','tempat_lahir_guru','tanggal_lahir_santri','jenis_kelamin_guru','telp_guru'
    ];

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class);
    }
}
