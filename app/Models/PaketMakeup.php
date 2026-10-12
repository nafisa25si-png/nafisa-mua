<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketMakeup extends Model
{
    protected $table = 'paket_makeups';

    protected $fillable = [
        'nama_paket',
        'harga',
        'deskripsi',
    ];
}
