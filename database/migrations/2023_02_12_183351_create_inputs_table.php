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
        Schema::create('inputs', function (Blueprint $table) {
            $table->uuid('input_id')->primary();
            $table->dateTime('post_date');
            $table->string('title');
            $table->string('content');
            $table->foreignUuid('photo')
                ->references('photo_id')
                ->on('photos');
            $table->foreignUuid('author')
                ->references('author_id')
                ->on('authors');
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
        Schema::dropIfExists('inputs');
    }
};
