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
        Schema::create('employee_has_leaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();                        
            $table->foreignId('leave_type_id')->constrained('ref_leave_types')->cascadeOnDelete();            
            $table->date('date_at');
            $table->time('time_at');            
            $table->text('reason');
            $table->enum('status', ['pending', 'approved', 'rejected']);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_has_leaves');
    }
};
