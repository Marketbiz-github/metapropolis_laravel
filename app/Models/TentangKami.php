<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = "tentang_kami";
    protected $fillable = [
        'gambar_tentang_kami',
        'visi',
        'misi',
        // 'tgl_upload',
    ];
}
