<?php

use App\Models\DdHouse;
use App\Models\Manager;
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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DdHouse::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Zm::class);
            $table->foreignIdFor(Manager::class);
            $table->string('code');
            $table->string('name');
            $table->string('number');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('supervisors');
    }
};
