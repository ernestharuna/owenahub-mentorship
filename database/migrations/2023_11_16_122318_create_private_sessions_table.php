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
        Schema::create('private_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('mentor_id')->nullable()->constrained();
            $table->text('description');
            $table->string('session_code', 8)->unique()->nullable();
            $table->string('meeting_link')->nullable();
            $table->string('meeting_date')->nullable();
            $table->boolean('paid')->default(false);
            $table->enum('type', ['one-time', 'long-term']);
            $table->enum('status', ['accepted', 'pending', 'declined'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_sessions');
    }
};
