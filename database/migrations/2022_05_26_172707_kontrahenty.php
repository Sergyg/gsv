<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrahenties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip');
            $table->integer('reg');
            $table->string('nazwa', 100);
            $table->string('czyvat');
            $table->string('ulica', 200);
            $table->integer('numdom');
            $table->integer('nummeszk');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->rememberToken();
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
        Schema::dropIfExists('kontrahenties');
    }
};



