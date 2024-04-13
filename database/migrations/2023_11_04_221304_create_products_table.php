<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('rating');
            $table->string('short_description')->nullable();
            $table->string('image')->nullable();
            $table->decimal('regular_price',8,2);
            $table->decimal('sale_price',8,2)->nullable();
            
            $table->text('description')->nullable();
            $table->string('SKU')->nullable();
            $table->enum('stock_status',['instock', 'outofstock'])->nullable();
            $table->string('featured')->default(false);
            $table->unsignedInteger('quantity')->default(10)->nullable();
            
            $table->text('images')->nullable()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable()->nullable();
            $table->bigInteger('sizes')->unsigned()->nullable()->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
