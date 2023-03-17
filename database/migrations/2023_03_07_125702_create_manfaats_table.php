<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manfaat', function (Blueprint $table) {
            $table->id();
            // $table->string('gambar_banner_manfaat');
            $table->string('ikon_manfaat');
            $table->string('gambar_manfaat')->nullable();
            $table->string('nama_manfaat');
            $table->text('pengertian');
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
        Schema::dropIfExists('manfaat');
    }
};
