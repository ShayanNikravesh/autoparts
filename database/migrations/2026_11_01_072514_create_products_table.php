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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->tinyText('tracking_code');
            $table->text('title');
            $table->text('english_title');
            $table->Integer('price');
            $table->Integer('price_discounted')->default('0');
            $table->integer('stock')->default('0');
            $table->mediumText('review');
            $table->mediumText('description');
            $table->enum('status',['active','inactive','unavailable','stop_selling'])->default('inactive');
            $table->timestamps();
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
