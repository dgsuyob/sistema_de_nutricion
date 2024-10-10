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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('calories');
            $table->decimal('protein',5,2);
            $table->decimal('carbohydrates',5,2);
            $table->decimal('fat',5,2);
            $table->decimal('fiber',5,2);
            $table->decimal('serving_size',5,2);
            $table->string('serving_unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
