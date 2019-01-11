<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nim')->unique();
            $table->string('nama_mhs');
            $table->string('jk');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('thn_masuk');
            $table->string('alamat');
            $table->string('notelp');
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
        Schema::dropIfExists('siswa');
    }
}
