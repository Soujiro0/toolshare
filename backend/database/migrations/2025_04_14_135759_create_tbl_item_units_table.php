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
        Schema::create('tbl_item_units', function (Blueprint $table) {
            $table->bigIncrements('unit_id');
            $table->bigInteger('item_id')->unsigned();
            $table->string('property_no', 50)->unique();
            $table->string('brand', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->text('specification')->nullable();
            $table->enum('item_condition', ['EXCELLENT', 'GOOD', 'FAIR', 'POOR'])->default('EXCELLENT');
            $table->enum('status', ['AVAILABLE', 'IN_USE', 'UNDER_MAINTENANCE'])->default('AVAILABLE');
            $table->date('date_acquired')->nullable();
            $table->foreign('item_id')->references('item_id')->on('tbl_items')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_item_units');
    }
};
