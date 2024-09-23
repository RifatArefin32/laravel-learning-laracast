<?php

use App\Models\Employer;
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
        Schema::table('job_items', function (Blueprint $table) {
            $table->foreignIdFor(Employer::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_items', function (Blueprint $table) {
            $table->dropForeignIdFor(Employer::class);
            $table->dropColumn('employer_id');
        });
    }
};
