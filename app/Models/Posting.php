<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon;
class Posting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'jenisposting_id',
        'sumberposting_id',
        'penulisposting_id',
        'kategoriposting_id',
        'judul',
        'deskripsi',
        'thumbnail',
        'slug',
        'tanggal'

    ];

    public function kategoriposting()
    {
        return $this->belongsTo(Kategoriposting::class);
    }

    public function jenisposting()
    {
        return $this->belongsTo(Jenisposting::class);
    }

    public function sumberposting()
    {
        return $this->belongsTo(Sumberposting::class);
    }

    public function penulisposting()
    {
        return $this->belongsTo(Penulisposting::class);
    }

    public function imageposting()
    {
        return $this->hasMany(Imageposting::class);
    }

    // static function getJenisposting()
    // {
    //     $data = DB::table('postings')->join('jenispostings','postings.jenisposting_id','jenispostings.id');
    //     return $data;
    // }

    public function getThumbnailAttribute($value)
    {
        // return 'https://nurulfalah.org/img_thumbnail/'.$value;
        return asset('img_thumbnail/'.$value);
    }

    public function getTanggalAttribute($value)
    {
        return Carbon\Carbon::parse($this->created_at)->isoFormat('D MMMM Y');
    }
    
}
