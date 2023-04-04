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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('yob')->nullable();
            $table->string('county')->nullable();
            $table->string('subcounty')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('retirement')->nullable();
            $table->string('service_number')->nullable();
            $table->string('passport')->nullable();
            $table->string('identity')->nullable();
            $table->string('military_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
