<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date_of_birth');
            $table->enum('gender',['male','female']);
            $table->decimal('height',5,2);
            $table->decimal('target_weight',5,2);
            $table->enum('activity_level',['sedentary','lightly_active','moderately_active','very_active','extra_active']);
            $table->text('allergies')->nullable();
            $table->text('dietary_restrictions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
