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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('anime name');
            $table->string('eng_name')->nullable();
            $table->string('jap_name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->default('img/anime-picture.jpg')->nullable();
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('dislikes')->default(0);
            $table->unsignedInteger('year')->nullable();
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
        Schema::dropIfExists('animes');
    }
};
