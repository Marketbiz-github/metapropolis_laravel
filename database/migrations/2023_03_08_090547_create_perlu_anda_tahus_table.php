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
        Schema::create('perlu_anda_tahu', function (Blueprint $table) {
            $table->id();
            $table->string('ikon_perlu');
            $table->string('gambar_perlu')->nullable();
            $table->string('nama_perlu');
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
        Schema::dropIfExists('perlu_anda_tahu');
    }
};
