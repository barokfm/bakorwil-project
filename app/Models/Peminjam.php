<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_peminjam';

    protected $fillable = [
        'gedung_id',
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
        'jam_operasional',
        'status_kepala',
        'status_sekertaris'
    ];

    protected $guarded = [
        'id'
    ];

    protected $ignored = [
        'id'
    ];

    public function perlengkapan(){
        return $this->hasMany(Perlengkapan::class, 'peminjam_id', 'id_peminjam');
    }

    public function rent()
    {
        $this->belongsTo(Rent::class);
    }
}
