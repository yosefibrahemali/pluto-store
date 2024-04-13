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
        
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->decimal('total',8,2);
            $table->enum('stock_status',['In Process', 'Being Processed','Under Shipment','Delivered','Rejected'])->default('In Process')->nullable();
            $table->string('payment_option');
            $table->string('fname');
            $table->string('lname');
            $table->text('user_id')->nullable();
            $table->text('address')->nullable();
            $table->text('address2');
            $table->text('city');
            $table->text('region')->nullable();
            $table->text('phone');
            $table->text('email')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
