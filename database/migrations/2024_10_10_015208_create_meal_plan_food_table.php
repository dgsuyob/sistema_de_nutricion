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
        Schema::create('meal_plan_food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meal_plan_id')->constrained('meal_plans')->onDelete('cascade');
            $table->foreignId('foods_id')->constrained()->onDelete('cascade');
            $table->decimal('quantity',6,2);
            $table->enum('meal_type',['breakfast','lunch','dinner','snack']);
            $table->enum('day_of_week',['monday','tuesday','wednesday','thursday','friday','saturday','sunday']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_plan_food');
    }
};
