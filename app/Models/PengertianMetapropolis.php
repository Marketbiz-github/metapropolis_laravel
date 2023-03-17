<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengertianMetapropolis extends Model
{
    use HasFactory;

    protected $table = "pengertian_metapropolis";
    protected $fillable = [
        'gambar_pengertian',
        'judul',
        'pengertian',
        // 'tgl_upload',
    ];
}
