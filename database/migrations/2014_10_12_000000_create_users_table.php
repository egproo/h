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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
			$table->string('image')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
			$table->string('image')->nullable();	
            $table->string('phone')->unique();
            $table->timestamp('verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('identification');
            $table->string('regnumber')->unique();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->unique();
			$table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('title')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('register_number')->nullable();
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->integer('eyears');			
            $table->timestamp('verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('providers_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->longText('filename')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
	
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('providers');
        Schema::dropIfExists('appointments');
        Schema::dropIfExists('payment_attempts');
        Schema::dropIfExists('providers_docs');
    }
};
