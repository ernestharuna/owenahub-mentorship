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
        Schema::create('featured_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->default('Career Development');
            $table->string('description');
            $table->string('image_path')->nullable();
            $table->longText('content');
            $table->string('published')->default(true);
            $table->foreignId('admin_id')->nullable()->constrained(table: 'admins', column: 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_articles');
    }
};
