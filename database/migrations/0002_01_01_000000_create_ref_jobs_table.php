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
        Schema::create('ref_jobs', function (Blueprint $table) {
            $table->id();  
            $table->string('job_name');  
            $table->string('job_description');
            $table->integer('min_salary');
            $table->integer('max_salary');                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_jobs');
    }
};
