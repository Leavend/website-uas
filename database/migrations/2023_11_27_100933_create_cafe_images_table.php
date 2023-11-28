<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cafe_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cafe_id');
            $table->string('path_file');
            $table->timestamps();
            $table->foreign('cafe_id')->references('id')->on('cafes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_images');
    }
};
