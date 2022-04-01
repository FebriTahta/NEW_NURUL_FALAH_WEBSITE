<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageposting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'img',
        'posting_id'

    ];

    public function posting()
    {
        return $this->belongsTo(Posting::class);
    }
}
