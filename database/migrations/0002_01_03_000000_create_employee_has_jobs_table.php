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
        Schema::create('employee_has_jobs', function (Blueprint $table) {
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();
            $table->foreignId('job_id')->constrained('ref_jobs')->cascadeOnDelete();
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->timestamps();

            $table->primary(['department_id', 'employee_id', 'job_id', 'from_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_has_jobs');
    }
};
