<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = "testimoni";
    protected $fillable = [
        'data_testimoni',
        'kategori',
        'kutipan',
        // 'isi',
        // 'tgl_upload',
    ];
}
