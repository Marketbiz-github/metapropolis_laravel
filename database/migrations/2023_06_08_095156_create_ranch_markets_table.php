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
        Schema::create('ranch_markets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('regency_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('address');
            $table->string('post_code')->nullable();
            $table->string('telp');
            $table->text('embed');
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
        Schema::dropIfExists('ranch_markets');
    }
};
