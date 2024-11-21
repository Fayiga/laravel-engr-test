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
        Schema::create('claim_items', function (Blueprint $table) {
            $table->id();
            $table->uuid('claim_id');
            $table->string('item_name');
            $table->decimal('unit_price', 10, 2);
            $table->integer('quantity');
            $table->decimal('sub_total', 10, 2);
            $table->timestamps();         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claim_items');
    }
};