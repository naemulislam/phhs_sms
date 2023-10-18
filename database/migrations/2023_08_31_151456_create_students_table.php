<?php

use App\Models\Group;
use App\Models\Media;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("applicant_name")->nullable();
            $table->foreignIdFor(User::class)->constrained();
            $table->integer('roll')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('absent_guardian')->nullable();
            $table->string('absent_guardian_nid')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('birth_reg_no')->nullable();
            $table->string('phone')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('sibling')->nullable();
            $table->string('shift')->nullable();
            $table->string('quota')->nullable();
            $table->string('type')->nullable();
            $table->string('blood')->nullable();
            $table->foreignId('group_id')->nullable()->constrained((new Group())->getTable());
            $table->string('old_prev_school')->nullable();
            $table->foreignId('profile_id')->nullable()->constrained((new Media())->getTable());
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
