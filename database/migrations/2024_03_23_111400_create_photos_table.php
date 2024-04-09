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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId("user_id")->references("id")->on("users");
            $table->unsignedBigInteger("category_id")->nullable();
            $table->unsignedBigInteger("album_id")->nullable();
            $table->string('image');
            $table->string('title')->nullable();
            $table->text('deskription')->nullable();
            $table->enum('private',['public','private'])->nullable();
            $table->enum('on_comments',['on','off'])->default('on');
            $table->enum('photo_draft',['on','off'])->default('off');
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
