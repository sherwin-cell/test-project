<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Job;
use App\Models\Tag;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create tags table
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Create pivot table (job_tag)
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignIdFor(Job::class)
                  ->constrained()
                  ->cascadeOnDelete();
            $table->foreignIdFor(Tag::class)
                  ->constrained()
                  ->cascadeOnDelete();
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop pivot table first
        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('tags');
    }
};
