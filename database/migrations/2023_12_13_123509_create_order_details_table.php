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
            # IDs
            $table->id();
            $table->unsignedBigInteger('order_id');

            # Integers
            $table->integer('quantity');
            # Strings
            $table->longText('note')->nullable()->default(null);
            
            # Timestamps
            $table->timestamps();

            # Foreign keys
            $table->foreign('order_id')->references('id')->on('orders');
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
