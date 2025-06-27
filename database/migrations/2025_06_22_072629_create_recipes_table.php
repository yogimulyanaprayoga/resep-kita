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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_ingredient_id')->nullable()->constrained('ingredients')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable()->after('description');
            $table->integer('cook_minutes')->nullable()->after('main_ingredient_id');
            $table->integer('servings')->nullable()->after('cook_minutes');

            $table->integer('calories')->nullable()->after('servings');
            $table->integer('protein')->nullable();
            $table->integer('carbohydrate')->nullable();
            $table->integer('fat')->nullable();
            $table->integer('fiber')->nullable();
            $table->text('instructions')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
