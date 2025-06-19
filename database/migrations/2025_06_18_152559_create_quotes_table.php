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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('location');
            $table->enum('type', ['Résidentiel', 'Agricole', 'Industriel']);
            $table->decimal('surface', 8, 2)->nullable();
            $table->decimal('power_requested', 8, 2)->nullable();
            $table->text('usage')->nullable();
            $table->integer('panel_count');
            $table->decimal('total_power', 8, 2);
            $table->decimal('surface_required', 8, 2);
            $table->decimal('price_ht', 10, 2);
            $table->decimal('price_ttc', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
