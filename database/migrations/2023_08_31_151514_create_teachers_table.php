<?php

use App\Models\Media;
use App\Models\Subject;
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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('designation')->nullable();
            $table->foreignId('subject_id')->constrained((new Subject())->getTable());
            $table->string('shift')->nullable();
            $table->string('blood')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('nid')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('join_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
