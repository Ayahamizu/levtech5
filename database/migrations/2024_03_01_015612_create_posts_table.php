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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('faculty_id')->nullable()->constrained();
            $table->foreignId('major_id')->nullable()->constrained();
            $table->foreignId('seminar_id')->nullable()->constrained();
            $table->text('content')->nullable();
            $table->text('teacher')->nullable();
            $table->boolean('Isgroup')->nullable();
            $table->boolean('Iscareer')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
