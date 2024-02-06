<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id('id_peminjam');
            $table->string('nama_peminjam');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_ktp');
            $table->string('foto_ktp')->nullable();
            $table->string('agenda');
            $table->date('tgl_acara');
            $table->time('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjams');
    }
}
