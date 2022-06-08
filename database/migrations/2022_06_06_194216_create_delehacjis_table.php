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
        Schema::create('delehacjis', function (Blueprint $table) {
            $table->id();
            $table->string('lp');
            $table->string('name');
            $table->string('dataod');
            $table->string('datado');
            $table->string('wyjazd');
            $table->string('przyjazd');
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
        Schema::dropIfExists('delehacjis');
    }
};
