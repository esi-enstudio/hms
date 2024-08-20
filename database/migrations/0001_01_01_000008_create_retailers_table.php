<?php

use App\Models\DdHouse;
use App\Models\Manager;
use App\Models\Rso;
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
        Schema::create('retailers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(DdHouse::class);
            $table->foreignIdFor(Manager::class);
            $table->foreignIdFor(Supervisor::class);
            $table->foreignIdFor(Rso::class);
            $table->string('cluster_market')->nullable();
            $table->string('retailer_code')->unique()->nullable();
            $table->string('retailer_name')->nullable();
            $table->string('retailer_type')->nullable();
            $table->string('enabled')->nullable();
            $table->string('sim_seller')->nullable();
            $table->string('itop_number')->unique()->nullable();
            $table->string('service_point')->nullable();
            $table->string('category')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('contact_number')->unique()->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->date('dob')->nullable();
            $table->string('nid')->unique()->nullable();
            $table->string('trade_license')->unique()->nullable();
            $table->string('tin_number')->unique()->nullable();
            $table->string('bts_code')->nullable();
            $table->string('route')->nullable();
            $table->string('description')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamp('disabled_at')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retailers');
    }
};
