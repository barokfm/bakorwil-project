<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    public function peralatan(){
        return $this->hasMany(Peralatan::class, 'id_peralatan');
    }
}
