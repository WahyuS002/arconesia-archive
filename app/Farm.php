<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = ['nama_lahan', 'luas', 'komoditas', 'deskripsi'];

    public function farm_galleries()
    {
        return $this->hasMany(FarmGallery::class);
    }
}
