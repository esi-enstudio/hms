<?php

use App\Models\DdHouse;
use App\Models\Manager;
use App\Models\Supervisor;
use App\Models\User;
use App\Models\Zm;
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
        Schema::create('bps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DdHouse::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Zm::class);
            $table->foreignIdFor(Manager::class);
            $table->foreignIdFor(Supervisor::class);
            $table->string('employee_code')->nullable();
            $table->string('name');
            $table->string('number');
            $table->string('personal_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
            $table->string('address')->nullable();
            $table->string('religion')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('brunch_name')->nullable();
            $table->string('routing_number')->nullable();
            $table->string('education')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('gender')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('designation')->nullable();
            $table->timestamp('joining_date')->nullable();
            $table->timestamp('resign_date')->nullable();
            $table->boolean('status')->default(false);
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bps');
    }
};
