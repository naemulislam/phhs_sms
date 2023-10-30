<?php

use App\Models\Group;
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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->foreignId('group_id')->constrained((new Group())->getTable());
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->string('exam_type')->nullable();
            $table->string('result_type')->nullable();
            $table->string('document')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
