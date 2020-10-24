<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema largely, uh, 'inspired' by LDDB
        Schema::create('physical_releases', function (Blueprint $table) {
            $table->id();
            $table->string('imdb_id');
            $table->string('release_title');
            $table->enum('video_type', [
                'NTSC', 'PAL', 'Hi-Vision', 'Discovision', 'LD-ROM', 'LD-ROM2',
                'HDVS', 'PAL+', '720p', '1080i', '1080p', 'MEGA-LD'
            ]);
            $table->string('country');
            $table->enum('color', [
                'Color', 'Black & White', 'Colorized', 'Color and B&W', 'Tinted',
            ]);
            $table->string('size');             // Physical size of media. (12", ...)
            $table->string('package');          // Gate-fold, Box-set, etc.
            $table->string('picture_ratio');    // Pan&Scan, letterbox, etc.
            $table->string('sound_encoding');   // Analog, DTS, etc.
            $table->enum('play_mode', [
                'CAV only', 'CLV only', 'CAV/CLV (mixed)'
            ]);
            $table->string('category');
            $table->string('publisher');
            $table->string('collection');
            $table->string('main_language');
            $table->enum('captioning', [
                'none', 'CC', 'CC & LD-G', 'LD-G', 'Teletext'
            ]);

            // Bools
            $table->boolean('has_commentary');
            $table->boolean('has_subtitles');

            $table->string('lddb_link')->nullable();
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
        Schema::dropIfExists('physical_releases');
    }
}
