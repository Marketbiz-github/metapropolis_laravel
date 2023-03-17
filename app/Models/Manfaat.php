<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manfaat extends Model
{
    use HasFactory;

    protected $table = "manfaat";
    protected $fillable = [
        // 'gambar_banner_manfaat',
        'ikon_manfaat',
        'gambar_manfaat',
        'nama_manfaat',
        'pengertian',
    ];
}
