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
        Schema::create('isps', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('no_certification');
            $table->date('start_date');
            $table->date('expired_date');
            $table->string('pdf_path')->nullable();
            $table->date('surveillance_1_plan')->nullable();
            $table->date('surveillance_2_plan')->nullable();
            $table->date('renewal_plan')->nullable();
            $table->string('certification_type')->default('ISPS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isps');
    }
};
