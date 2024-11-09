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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('user_id');
            $table->enum('payment_method', ['bank_transfer', 'e_wallet']);
            $table->decimal('amount');
            $table->enum('payment_status', ['pending', 'paid', 'failed']);
            $table->string('receipt_image');
            $table->dateTime('transactions_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
