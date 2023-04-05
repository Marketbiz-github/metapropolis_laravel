<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $table = "jurnal";
    protected $fillable = [
        'gambar_jurnal',
        'judul',
        'file_jurnal',
        // 'tgl_upload',
    ];

}
