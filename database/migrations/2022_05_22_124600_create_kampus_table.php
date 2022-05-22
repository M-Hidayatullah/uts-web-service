<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampus', function (Blueprint $table) {
            $table->id();
            $table->string('kode_cabang')->unique();
            $table->string('kode_kampus')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('telepon');
            $table->string('website');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->text('alamat_lengkap');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
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
        Schema::dropIfExists('kampus');
    }
}
