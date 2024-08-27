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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('description_en');
            $table->text('description_ar');
            $table->foreignId('type_id')->constrained('property_types');
            $table->foreignId('status_id')->constrained('property_statuses');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('state_id')->constrained('states');
            $table->string('featured_image')->nullable();
            $table->string('featured_video')->nullable();
            $table->json('gallery')->nullable();
            $table->decimal('price', 15, 2);
            $table->decimal('area_size', 15, 2);
            $table->integer('master_rooms')->nullable();
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->integer('garages')->nullable();
            $table->decimal('garage_size', 15, 2)->nullable();
            $table->year('year_built')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->text('private_note')->nullable();
            $table->string('property_code')->unique();
            $table->json('property_documents')->nullable();
            $table->boolean('visibility')->default(true);
            $table->json('labels')->nullable();
            $table->json('features')->nullable();
            $table->json('additional_features')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
