<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function peralatan(){
        return $this->hasMany(Peralatan::class, 'gedung_id', 'id_gedung');
    }

    public function rent(){
        return $this->belongsTo(Rent::class);
    }
}
