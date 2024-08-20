<?php

use App\Models\DdHouse;
use App\Models\Manager;
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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(DdHouse::class);
            $table->foreignIdFor(Manager::class);
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('nid')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('designation')->nullable();
            $table->string('signature')->nullable();
            $table->timestamp('resign_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};
