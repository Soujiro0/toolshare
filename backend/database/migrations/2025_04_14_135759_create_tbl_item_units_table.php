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

            $table->enum('item_condition', ['GOOD', 'FAIR', 'DAMAGED', 'LOST'])->default('GOOD');

            $table->enum('availability_status', ['AVAILABLE', 'BORROWED', 'NOT_AVAILABLE'])->default('AVAILABLE');
            $table->enum('operational_status', ['OPERATIONAL', 'UNDER_MAINTENANCE', 'FOR_DISPOSAL'])->default('OPERATIONAL');

            $table->date('date_acquired')->nullable();
            $table->timestamps();

            $table->foreign('item_id')->references('item_id')->on('tbl_items')->onDelete('cascade');
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
