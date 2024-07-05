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
        Schema::table('detail_loaners', function (Blueprint $table) {
            $table->unsignedBigInteger('id_loaners')->after('id')->nullable();
            $table->foreign('id_loaners')->references('id')->on('loans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_loaners', function (Blueprint $table) {
            $table->dropForeign(['id_loaners']);
            $table->dropColumn('id_loaners');
        });
    }
};
