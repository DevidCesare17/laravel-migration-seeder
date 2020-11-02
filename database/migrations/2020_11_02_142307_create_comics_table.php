<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->string('title', 40);
            $table->string('original_title', 50);
            $table->string('author', 40);
            $table->smallInteger('pages');
            $table->string('edition', 30);
            $table->float('price', 5,2);
            $table->year('year');
            $table->string('color', 10);
            $table->smallInteger('n_comic');
            $table->string('image')->default('https://via.placeholder.com/150x300');
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
        Schema::dropIfExists('comics');
    }
}
