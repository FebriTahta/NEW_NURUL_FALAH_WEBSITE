<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $fillable = [
        'provinsi_id','nama_wilayah'
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function cabangbaru()
    {
        return $this->belongsToMany(Cabangbaru::class);
    }
}
