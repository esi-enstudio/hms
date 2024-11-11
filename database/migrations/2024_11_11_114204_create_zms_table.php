<?php

use App\Models\DdHouse;
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
        Schema::create('zms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DdHouse::class);
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('number');
            $table->string('gender')->nullable();
            $table->string('designation');
            $table->timestamp('resign_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zms');
    }
};
