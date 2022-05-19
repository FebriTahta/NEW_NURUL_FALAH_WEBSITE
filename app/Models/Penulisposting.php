<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulisposting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'penulis_name',
        'penulis_slug',

    ];

    public function posting()
    {
        return $this->hasMany(Posting::class);
    }
}
