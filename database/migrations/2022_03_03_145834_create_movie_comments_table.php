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
        Schema::create('movie_comments', function (Blueprint $table) {
            $table->id();
            $table->mediumText('content');
            $table->boolean('like')->default(false);
            $table->boolean('dislike')->default(false);
            $table->foreignId('parent_id')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('movie_id');
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
        Schema::dropIfExists('movie_comments');
    }
};
