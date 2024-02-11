<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public function peminjam(){
        return $this->belongsTo(Peminjam::class, 'id_peminjam');
    }

    public function transaksi(){
        return $this->hasOne(Transaksi::class, 'id_peminjam');
    }
}
