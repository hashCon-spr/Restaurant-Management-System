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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->foreignId('id_discount_menu')->constrained('discount_menus')->onDelete('cascade');
            $table->string('name');
            $table->integer('early_stock');
            $table->integer('final_stock');
            $table->integer('price');
            $table->integer('discounted_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
