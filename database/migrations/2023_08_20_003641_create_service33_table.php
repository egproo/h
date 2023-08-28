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
        Schema::create('services_types', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });			
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('services')->cascadeOnDelete();
            $table->foreignId('services_type_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->unsignedSmallInteger('position')->default(0);
            $table->boolean('is_visible')->default(false);
            $table->string('seo_title', 60)->nullable();
            $table->string('seo_description', 160)->nullable();
            $table->timestamps();
        });
        Schema::create('services_providers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('services_id')->nullable()->constrained()->cascadeOnDelete();
            $table->bigInteger('provider_id');
            $table->decimal('price', 8, 2)->nullable();
            $table->timestamps();
        });
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('services_zones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('services_id')->nullable()->constrained()->cascadeOnDelete();
            $table->bigInteger('provider_id');
            $table->bigInteger('zone_id');
            $table->timestamps();
        });
        Schema::create('services_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('services_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('provider_id')->nullable()->constrained()->cascadeOnDelete();
            $table->integer('day_of_week');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('services_session_id');
            $table->dateTime('appointment_date');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('services_session_id')->references('id')->on('services_sessions');
        });	
        Schema::create('payment_attempts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id');
            $table->decimal('total', 10, 2);
            $table->boolean('is_successful')->default(false);
            $table->timestamps();
            $table->text('notes')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments');
        });			
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('services_types');
        Schema::dropIfExists('services_providers');
        Schema::dropIfExists('services_zones');
        Schema::dropIfExists('zones');
    }
};
