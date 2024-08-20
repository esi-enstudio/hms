<?php

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
        Schema::create('dd_houses', function (Blueprint $table) {
            $table->id();
            $table->string('cluster')->nullable();
            $table->string('region')->nullable();
            $table->string('code')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('bts_code')->nullable();
            $table->timestamp('disabled_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dd_houses');
    }
};
