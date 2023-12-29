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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullabe;
            $table->string('email')->nullabe;
            $table->string('contact')->nullabe;
            $table->string('address')->nullabe;
            $table->string('title')->nullabe;
            $table->string('quantity')->nullabe;
            $table->string('price')->nullabe;
            $table->string('image')->nullabe;
            $table->string('product_id')->nullabe;
            $table->string('user_id')->nullabe;




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
