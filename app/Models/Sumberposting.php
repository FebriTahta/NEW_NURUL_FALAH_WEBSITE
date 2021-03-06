<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumberposting extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'sumber_name',
        'sumber_slug',

    ];

    public function posting()
    {
        return $this->hasMany(Posting::class);
    }
}
