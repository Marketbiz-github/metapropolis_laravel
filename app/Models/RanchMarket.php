<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RanchMarket extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'regency_id', 'address', 'post_code', 'telp', 'embed'];

    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
