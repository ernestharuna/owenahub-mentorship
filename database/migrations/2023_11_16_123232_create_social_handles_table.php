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
        Schema::create('social_handles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(table: 'users', column: 'id')->cascadeOnDelete();
            $table->foreignId('admin_id')->nullable()->constrained(table: 'admins', column: 'id')->cascadeOnDelete();
            $table->foreignId('mentor_id')->nullable()->constrained(table: 'mentors', column: 'id')->cascadeOnDelete();
            $table->string('facebook')->nullable();
            $table->string('x_twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_handles');
    }
};
