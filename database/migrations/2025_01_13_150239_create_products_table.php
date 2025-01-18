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
            $table->id(); // id: Integer, Primary Key
            $table->string('product_id')->unique();     // product_id: String, Required, Unique
            $table->string('name');     // name: String, Required
            $table->text('description')->nullable();    // description: Text, Optional
            $table->decimal('price');   // price: Decimal, Required
            $table->integer('stock')->nullable();   // stock: Integer, Optional
            $table->string('image');    // image: string, Required
            $table->timestamps();   // created_at & updated_at Timestamp
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
