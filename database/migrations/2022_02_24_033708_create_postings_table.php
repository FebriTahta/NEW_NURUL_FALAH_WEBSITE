<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->integer('urut')->nullable();
            $table->string('views')->nullable();
            $table->unsignedBigInteger('jenisposting_id')->nullable();
            $table->unsignedBigInteger('sumberposting_id')->nullable();
            $table->unsignedBigInteger('penulisposting_id')->nullable();
            $table->unsignedBigInteger('kategoriposting_id')->nullable();
            $table->string('judul');
            $table->string('slug');
            $table->string('tanggal')->nullable();
            $table->longText('deskripsi');
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('postings');
    }
}
