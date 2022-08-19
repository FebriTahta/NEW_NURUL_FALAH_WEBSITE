<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grouppertanyaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id','nama_group'
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
