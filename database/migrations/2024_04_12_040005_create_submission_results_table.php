<?php

use App\Models\Group;
use App\Models\Student;
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
        Schema::create('submission_results', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Group::class)->constrained();
            $table->string('subject_id');
            $table->foreignIdFor(Student::class)->constrained();
            $table->string('roll');
            $table->string('mark');
            $table->string('exam_type')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_results');
    }
};
