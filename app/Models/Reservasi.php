<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = [
        'kode',
        'nama',
        'paket',
        'tanggal',
        'jam',
        'metode_pembayaran',
        'bukti_pembayaran',
        'status',
    ];
}
