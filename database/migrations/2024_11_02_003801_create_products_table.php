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
            $table->string('code')->unique();
            $table->enum('status', ['draft', 'trash', 'published']);
            $table->timestampTz('imported_t')->nullable();
            $table->string('url');
            $table->string('creator');
            $table->unsignedInteger('created_t');
            $table->unsignedInteger('last_modified_t');
            $table->string('product_name');
            $table->string('quantity');
            $table->string('brands');
            $table->string('categories');
            $table->string('labels');
            $table->string('cities');
            $table->string('purchase_places');
            $table->string('stores');
            $table->text('ingredients_text');
            $table->string('traces');
            $table->string('serving_size');
            $table->string('serving_quantity');
            $table->string('nutriscore_score');
            $table->string('nutriscore_grade');
            $table->string('main_category');
            $table->string('image_url');
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
