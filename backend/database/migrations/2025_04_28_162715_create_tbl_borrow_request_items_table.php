<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_borrow_request_items', function (Blueprint $table) {
            $table->bigIncrements('request_item_id');
            $table->bigInteger('request_id')->unsigned();
            $table->bigInteger('unit_id')->unsigned();
            $table->enum('item_condition_out', ['EXCELLENT', 'GOOD', 'FAIR', 'POOR'])->default('GOOD');
            $table->enum('item_condition_in', ['EXCELLENT', 'GOOD', 'FAIR', 'POOR'])->default('GOOD');
            $table->enum('damage_status', ['DAMAGED', 'UNDAMAGED'])->default('UNDAMAGED');
            $table->text('damage_notes')->nullable();
            $table->timestamp('returned_date')->nullable();
            $table->timestamps();

            $table->foreign('request_id')->references('request_id')->on('tbl_borrow_requests')->onDelete('cascade');
            $table->foreign('unit_id')->references('unit_id')->on('tbl_item_units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_borrow_request_items');
    }
};
