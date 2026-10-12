<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalMakeup extends Model
{
    protected $table = 'jadwal_makeups';

    protected $fillable = [
        'nama_pelanggan',
        'tanggal',
        'waktu',
        'status',
    ];
}
