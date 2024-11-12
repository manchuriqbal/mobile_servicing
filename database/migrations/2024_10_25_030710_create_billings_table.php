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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers', 'id')->cascadeOnDelete();
            $table->foreignId('service_id')->constrained('services', 'id')->cascadeOnDelete();
            $table->foreignId('technician_id')->constrained('technicians', 'id')->cascadeOnDelete();
            $table->string('device_name');
            $table->decimal('amount', 10, 2);
            $table->decimal('purchase_price', 10, 2);
            $table->string('payment_method', 10)->default('cash');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
