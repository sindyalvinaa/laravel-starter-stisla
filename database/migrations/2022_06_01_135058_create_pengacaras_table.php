<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengacarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengacaras', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_pengacara');
            $table->string('kategori');
            $table->string('profil');
            $table->biginteger('telp');
            $table->string('keterangan');
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
        Schema::dropIfExists('pengacaras');
    }
}
