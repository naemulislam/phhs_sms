<?php

use App\Models\User;
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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('present_vill')->nullable();
            $table->string('present_post')->nullable();
            $table->string('present_upzilla')->nullable();
            $table->string('present_dist')->nullable();
            $table->string('permanent_vill')->nullable();
            $table->string('permanent_post')->nullable();
            $table->string('permanent_upzilla')->nullable();
            $table->string('permanent_dist')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
