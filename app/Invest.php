<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    protected $fillable = ['total_kebutuhan', 'periode_kontrak', 'bagi_hasil', 'dana_max', 'kelipatan'];

    public function farm()
    {
        return $this->hasOne(Farm::class);
    }
}
