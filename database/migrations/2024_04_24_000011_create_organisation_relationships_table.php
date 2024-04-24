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
        Schema::create('organisation_relationships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisation_id1')->constrained('organisations')->cascadeOnDelete();
            $table->foreignId('organisation_id2')->constrained('organisations')->cascadeOnDelete();
            $table->string('relationship');
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisation_relationships');
    }
};
