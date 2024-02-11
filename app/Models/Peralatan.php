<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    public function peminjaman(){
        $this->hasMany(Peminjaman::class, 'id_peralatan');
    }

}
