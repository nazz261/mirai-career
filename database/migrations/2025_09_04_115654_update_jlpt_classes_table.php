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
    Schema::table('jlpt_classes', function (Blueprint $table) {
    $table->string('day')->after('level');
    $table->time('start_time')->after('day');
    $table->time('end_time')->after('start_time');
    $table->dropColumn('time'); // remove old column
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
