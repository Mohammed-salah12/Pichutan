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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->required();
            $table->string('author_name');
            $table->text('author_info');
            $table->text('content');
            $table->string('email')->nullable(false);
            $table->boolean('is_published')->default(false);
            $table->unsignedBigInteger('author_id')->nullable(false);
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('website_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
