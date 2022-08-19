<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_form','img_form','jenis_form','slug_form'
    ];

    public function Grouppertanyaan()
    {
        return $this->hasMany(Grouppertanyaan::class);
    }
}
