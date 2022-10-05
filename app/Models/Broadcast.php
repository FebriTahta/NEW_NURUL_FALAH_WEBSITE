<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    use HasFactory;
    protected $fillable= [
        'judul_broadcast','desc_broadcast','img_broadcast','url_img','jenis_broadcast'
    ];

    public function target()
    {
        return $this->hasMany(Target::class);
    }
}
