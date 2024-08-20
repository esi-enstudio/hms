<?php

use App\Models\DdHouse;
use App\Models\Manager;
use App\Models\Supervisor;
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
        Schema::create('rsos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(DdHouse::class);
            $table->foreignIdFor(Manager::class);
            $table->foreignIdFor(Supervisor::class);
            $table->string('osrm_code')->unique()->nullable();
            $table->string('employee_code')->unique()->nullable();
            $table->string('rso_code')->unique()->nullable();
            $table->string('corporate_number')->unique()->nullable();
            $table->string('rso_number')->unique()->nullable();
            $table->string('personal_number')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->unique()->nullable();
            $table->string('market_type')->nullable();
            $table->string('salary')->nullable();
            $table->string('nid')->unique()->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('name_of_degree')->nullable();
            $table->string('institute')->nullable();
            $table->string('board')->nullable();
            $table->string('passing_year')->nullable();
            $table->double('gpa')->nullable();
            $table->string('subject')->nullable();
            $table->string('nationality')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('designation')->nullable();
            $table->string('signature')->nullable();
            $table->date('dob')->nullable();
            $table->timestamp('joining_date')->nullable();
            $table->timestamp('resigning_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rsos');
    }
};
