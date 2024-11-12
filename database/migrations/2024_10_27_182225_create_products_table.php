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
            $table->string('name');
            $table->bigInteger('quantity')->nullable();
            $table->foreignId('device_id')->constrained('devices', 'id')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories', 'id')->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->decimal('purchase_price', 10, 2);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void

    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['device_id']);
            $table->dropForeign(['category_id']);
        });

        Schema::dropIfExists('products');
    }
};
