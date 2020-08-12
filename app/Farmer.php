<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable = [
        'user_id', 'nama', 'jk', 'tanggal_lahir',
        'provinsi', 'kota', 'nope', 'nik', 'npwp',
        'foto_ktp', 'foto_kyc', 'bank', 'nama_rek',
        'no_rek',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
