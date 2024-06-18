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
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('start_price')->nullable()->default(0);
            $table->string('brocure')->nullable();
            $table->boolean('is_cooming_soon')->default(false);
        });

        Schema::table('reservations', function (Blueprint $table) {
            $table->smallInteger('type')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('start_price');
            $table->dropColumn('brocure');
        });

        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
