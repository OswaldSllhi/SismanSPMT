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
        Schema::table('iso9001s', function (Blueprint $table) {
            $table->string('certification_type')->default('ISO 9001');
        });
    }
    
    public function down(): void
    {
        Schema::table('iso9001s', function (Blueprint $table) {
            $table->dropColumn('certification_type');
        });
    }
    
};
