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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('content')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('guide_id')->nullable();
            $table->float('rating');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
