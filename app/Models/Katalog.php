<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'katalog_name',
        'katalog_slug',

    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
