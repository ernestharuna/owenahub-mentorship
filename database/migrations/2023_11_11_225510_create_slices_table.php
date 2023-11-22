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
        Schema::create('slices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->nullable()->constrained(table: 'admins', column: 'id')->cascadeOnDelete();
            $table->foreignId('mentor_id')->nullable()->constrained(table: 'mentors', column: 'id')->cascadeOnDelete();
            $table->string('title');
            $table->string('about');
            $table->text('overview');
            $table->string('category');
            $table->string('duration');;
            $table->boolean('is_paid')->default(false);
            $table->decimal('price', 8, 2)->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slices');
    }
};
