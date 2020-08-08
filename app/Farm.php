<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = ['nama_lahan', 'luas', 'deskripsi'];

    public function farm_galleries()
    {
        return $this->hasMany(FarmGallery::class);
    }
}
