<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    protected $fillable = [
        'broadcast_id','nama_target','telp_target','status'
    ];

    public function broadcast()
    {
        return $this->belongsTo(Broadcast::class);
    }
}
