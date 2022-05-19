<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriposting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'kategori_name',
        'kategori_slug',

    ];

    public function posting()
    {
        return $this->hasMany(Posting::class);
    }
}
