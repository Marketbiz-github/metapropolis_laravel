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
        Schema::create('pengertian_metapropolis', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_pengertian');
            $table->string('judul');
            $table->text('pengertian');
            // $table->string('text_2')->nullable();
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
        Schema::dropIfExists('pengertian_metapropolis');
    }
};
