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
            $table->unsignedBigInteger('product_category_id');
            $table->string('name');
            $table->double('price');
            $table->integer('qty');
            $table->double('discount')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('badges')->nullable();
            $table->timestamps();


            $table->foreign('product_category_id')->references('id')->on("product_categories")->onDelete('cascade');

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
