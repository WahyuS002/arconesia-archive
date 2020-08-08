<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarmGallery extends Model
{
    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }
}
