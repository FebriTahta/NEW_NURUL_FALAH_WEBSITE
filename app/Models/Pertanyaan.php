<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'grouppertanyaan_id','jenis_pertanyaan', 'pertanyaan'
    ];

    public function grouppertanyaan()
    {
        return $this->belongsTo(Grouppertanyaan::class);
    }

    public function pilihan()
    {
        return $this->hasMany(Pilihan::class);
    }
}
