<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";
    protected $fillable = [
        'gambar_blog',
        'judul',
        'slug',
        'isi',
        'tgl_upload',
    ];

    public function atributtanggalupload()
    {
        return Carbon::parse($this->attributes['tgl_upload'])
        ->translatedFormat('d F Y');
    }
}
