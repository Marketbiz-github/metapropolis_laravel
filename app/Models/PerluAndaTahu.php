<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerluAndaTahu extends Model
{
    use HasFactory;

    protected $table = "perlu_anda_tahu";
    protected $fillable = [
        // 'gambar_banner_manfaat',
        'ikon_perlu',
        'gambar_perlu',
        'nama_perlu',
        'pengertian',
    ];
}
