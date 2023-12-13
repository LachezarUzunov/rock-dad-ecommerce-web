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
            # IDs
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');

            # Strings
            $table->string('number')->unique(); // Order number that we could use for reference and provide to client if needed
            
            # Decimals
            $table->decimal('price', 10, 2);
            $table->decimal('original_price', 10, 2);

            # Enums
            $table->enum('status', ['pending', 'intransit', 'delivered', 'completed']);

            # Timestamps
            $table->timestamp('in_transit')->nullable()->default(null); // When the cargo is loaded on the truck
            $table->timestamp('delivered')->nullable()->default(null); // When cargo is delivered
            $table->timestamp('finalized_at')->nullable()->default(null); // When order is fully completed and item cannot be returned and refunded back
            $table->timestamps();

            # Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
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
