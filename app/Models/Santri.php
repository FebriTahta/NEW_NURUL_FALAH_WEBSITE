<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id','lembaga_id','tempat_lahir','tanggal_lahir','nama_ortu','hp_ortu','nama_santri','jenis_kelamin'
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class);
    }
}
