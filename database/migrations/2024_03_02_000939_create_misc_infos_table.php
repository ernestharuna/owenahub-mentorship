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
        Schema::create('misc_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('mentor_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('role')->nullable();
            $table->string('company')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('expertise');
            $table->string('skills');
            $table->string('bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('misc_infos');
    }
};
