<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjam');
    }
}
