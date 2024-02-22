<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public function peminjam(){
        return $this->belongsTo(Peminjam::class, 'id_peminjam');
    }

    public function gedung(){
        return $this->belongsTo(Gedung::class);
    }
}
