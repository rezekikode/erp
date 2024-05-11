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
        Schema::create('address_organisation', function (Blueprint $table) {
            $table->foreignId('address_id')->constrained('addresses')->cascadeOnDelete();
            $table->foreignId('organisation_id')->constrained('organisations')->cascadeOnDelete();            
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->timestamps();
            $table->primary(['organisation_id', 'address_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_organisation');
    }
};
