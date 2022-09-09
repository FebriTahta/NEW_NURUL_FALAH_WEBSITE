<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabangbarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabangbarus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cabang');
            $table->string('kepala_cabang');
            $table->string('kadivre_cabang');
            $table->string('alamat_cabang');
            $table->string('kota_cabang');
            $table->string('provinsi_cabang');
            $table->string('status_cabang');
            $table->string('telpon')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('kabupaten_id')->nullable();
            $table->unsignedBigInteger('provinsi_id')->nullable();
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
        Schema::dropIfExists('cabangbarus');
    }
}
