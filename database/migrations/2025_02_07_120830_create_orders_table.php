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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_address_id')->constrained('user_addresses')->onDelete('cascade');
            $table->json('products'); // Array of product_id & quantity
            $table->decimal('total_price', 10, 2);
            $table->string('coupon')->nullable();
            $table->json('razorpay_data')->nullable();
            $table->enum('status', ['processing', 'packed', 'shipped', 'failed', 'canceled', 'delivered'])->default('processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
