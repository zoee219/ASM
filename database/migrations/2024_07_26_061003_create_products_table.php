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
            $table->increments('product_id'); //id: int | nó không âm | sẽ là primary eky
            $table->string('name', 20);
            $table->timestamps();
            $table->string('description', 500)->nullable();
            $table->float('price', 10, 2)->default(800.02);
            $table->string('image', 500)->nullable();
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
