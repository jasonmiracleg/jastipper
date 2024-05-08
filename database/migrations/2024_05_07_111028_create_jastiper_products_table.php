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
        Schema::create('jastiper_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')->on('products')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('jastiper_id')->index();
            $table->foreign('jastiper_id')->on('users')->references('id')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jastiper_products');
    }
};
