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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')->on('jastiper_products')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('order_id')->index();
            $table->foreign('order_id')->on('orders')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('invoice_id')->index()->nullable();
            $table->foreign('invoice_id')->on('invoices')->references('id')->onUpdate('cascade');
            $table->integer('total_price_on_purchase');
            $table->integer('unit_price_on_purchase');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
