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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('weight', 5, 2);
            $table->decimal('body_fat_percentage', 4, 2);
            $table->decimal('waist_circumference', 5, 2);
            $table->decimal('hip_circumference', 5, 2);
            $table->decimal('arm_circumference', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measures');
    }
};
