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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Otel adı
            $table->string('location');
            $table->decimal('price', 10, 2)->default(0);
            $table->text('description')->nullable(); // Otel açıklaması
            $table->integer('stars')->default(3);
            $table->boolean('has_wifi')->default(false);
            $table->boolean('has_parking')->default(false);
            $table->boolean('has_pool')->default(false);
            $table->boolean('has_restaurant')->default(false);
            $table->boolean('has_spa')->default(false);
            $table->boolean('has_gym')->default(false);
            $table->boolean('is_pet_friendly')->default(false);
            $table->boolean('has_beach_access')->default(false);
            $table->text('amenities')->nullable();
            $table->timestamps(); // Otel oluşturulma ve güncellenme zamanı
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
