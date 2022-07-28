<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'product_name',
        'product_desc',
        'product_img',
        'product_slug',
        'katalog_id',
    ];

    public function katalog()
    {
        return $this->belongsToMany(Katalog::class);
    }
}
