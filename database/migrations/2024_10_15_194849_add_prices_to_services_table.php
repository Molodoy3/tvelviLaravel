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
        Schema::table('services', function (Blueprint $table) {
            $table->string('price_min');
            $table->string('term_min');
            $table->string('price_middle');
            $table->string('term_middle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('price_min');
            $table->dropColumn('term_min');
            $table->dropColumn('price_max');
            $table->dropColumn('term_max');
        });
    }
};
