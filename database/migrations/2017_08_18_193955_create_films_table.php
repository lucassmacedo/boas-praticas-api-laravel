<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {

            $table->uuid('id')->primary('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->date('release');
            $table->string('locale');
            $table->integer('duration');
            $table->longText('sinopse');
            $table->string('site')->nullable();
            $table->string('cover');

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
        Schema::dropIfExists('films');
    }
}
