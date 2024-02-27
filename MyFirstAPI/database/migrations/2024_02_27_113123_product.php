<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('weight');
            $table->string('serioul_no');
            $table->string('description');
            $table->string('Category');
            $table->string('Brand');
            $table->string('Stock');
            $table->string('Inventory');
            $table->string('Images');
            $table->string('Dimensions');
            $table->string('Colors');
            $table->string('Rating');
            $table->string('Reviews');
            $table->string('Availability');
            $table->string('SKU');
            $table->string('Specifications');
            $table->timestamps();
        });
      //  ->nullable();
    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }

};
