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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('sender_id')->index();
            $table->foreign('sender_id')->on('users')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('recipient_id')->index();
            $table->foreign('recipient_id')->on('users')->references('id')->onUpdate('cascade');
            $table->text('message_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
