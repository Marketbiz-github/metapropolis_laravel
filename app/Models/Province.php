<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Province extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }

    public function ranchMarket(): HasManyThrough
    {
        return $this->hasManyThrough(RanchMarket::class, Regency::class);
    }
}