<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptureCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capture_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('site_rating', 4, 2);
            $table->integer('site_votes');
            $table->string('images'); // Serialized $name => $path
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
        Schema::dropIfExists('capture_cards');
    }
}
