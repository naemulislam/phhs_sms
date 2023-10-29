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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name_e');
            $table->string('name_b');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('web_address')->nullable();
            $table->string('total_t')->nullable();
            $table->string('total_s')->nullable();
            $table->string('total_c')->nullable();
            $table->string('total_l')->nullable();
            $table->longText('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
