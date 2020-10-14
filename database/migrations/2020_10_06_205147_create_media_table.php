<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year');
            $table->enum('rated',[
                'G',
                'PG',
                'PG-13',
                'R',
                'NC-17'
            ]);
            $table->string('released');
            $table->string('runtime');
            $table->string('genre')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
            $table->string('actors')->nullable();
            $table->string('plot')->nullable();
            $table->string('language');
            $table->string('country');
            $table->string('awards')->nullable();
            $table->string('poster');
            $table->tinyInteger('metascore')->nullable();
            $table->decimal('imdb_rating', 3, 1)->nullable();
            $table->integer('imdb_votes')->nullable();
            $table->string('imdb_id');
            $table->enum('media_type', [
                'anime_movie',
                'anime_ova',
                'anime_series',
                'movie',
                'tv_series'
            ]);
            $table->string('production')->nullable();
            $table->integer('physical_releases')->nullable();
            $table->integer('created_by');
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
        Schema::dropIfExists('media');
    }
}
