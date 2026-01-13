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
        Schema::table('users', function (Blueprint $table) {
            $table->text('image')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('xing')->nullable();
            $table->text('gitlab')->nullable();
            $table->text('github')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('linkedin');
            $table->dropColumn('xing');
            $table->dropColumn('gitlab');
            $table->dropColumn('github');
        });
    }
};
