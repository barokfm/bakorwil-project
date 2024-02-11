<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_peminjam';

    protected $fillable = [
        'nama_peminjam',
        'alamat',
        'email',
        'no_hp',
        'no_ktp',
        'foto_ktp',
        'agenda',
        'tgl_awal',
        'tgl_akhir',
        'waktu',
        'waktu_operasional',
        'status_sekertaris',
        'status_kepala'
    ];

    protected $ignored = [
        'id',
        'foto_ktp',
    ];

    public function peminjaman(){
        $this->hasMany(Peminjaman::class, 'id_peminjam');
    }
}
