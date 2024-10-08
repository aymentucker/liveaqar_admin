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
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('agency_id')->nullable()->constrained('agencies')->onDelete('set null');
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('description_en');
            $table->text('description_ar');
            $table->foreignId('type_id')->constrained('property_types');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('state_id')->constrained('states');
            $table->string('featured_image')->nullable();
            $table->string('featured_video')->nullable();
            $table->string('virtual_tour_link')->nullable();
            $table->string('url_link')->nullable();
            $table->json('gallery')->nullable();
            $table->decimal('sell_price', 15, 2)->nullable();
            $table->decimal('rent_price', 15, 2)->nullable();
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
            $table->boolean('featured')->default(false);
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
