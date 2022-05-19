<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jenisposting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'jenis_name',
        'jenis_slug',

    ];

    public function posting()
    {
        return $this->hasMany(Posting::class);
    }

    
}
