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
        Schema::create('detail_loaners', function (Blueprint $table) {
            $table->id();
            $table->integer('id_loaners');
            $table->integer('id_book');
            $table->datetime('dateOfreturn');
            $table->datetime('dateOfloan');
            $table->text('descriptions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_loaners');
    }
};
