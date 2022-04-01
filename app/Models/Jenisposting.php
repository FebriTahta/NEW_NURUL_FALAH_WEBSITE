<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisposting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'slug',

    ];

    public function posting()
    {
        return $this->hasMany(Posting::class);
    }
}
