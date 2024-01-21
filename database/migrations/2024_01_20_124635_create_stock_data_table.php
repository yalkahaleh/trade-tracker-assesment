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
        Schema::create('stock_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->decimal('changes_percentage', 5, 2);
            $table->decimal('change', 10, 2);
            $table->decimal('day_low', 10, 2);
            $table->decimal('day_high', 10, 2);
            $table->decimal('year_high', 10, 2);
            $table->decimal('year_low', 10, 2);
            $table->bigInteger('market_cap');
            $table->decimal('volume', 16, 0);
            $table->decimal('avg_volume', 16, 0);
            $table->decimal('open', 10, 2);
            $table->decimal('previous_close', 10, 2);
            $table->decimal('eps', 10, 2);
            $table->decimal('pe', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_data');
    }
};
