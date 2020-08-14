<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = ['nama_lahan', 'luas', 'deskripsi', 'lokasi'];

    public function farm_galleries()
    {
        return $this->hasMany(FarmGallery::class);
    }

    public function farmer()
    {
        return $this->hasOne(Farmer::class);
    }

    public function invest()
    {
        return $this->hasOne(Invest::class);
    }
}
