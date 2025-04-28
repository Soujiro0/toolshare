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
        Schema::create('tbl_borrow_request_summary', function (Blueprint $table) {
            $table->bigIncrements('request_summary_id');
            $table->bigInteger('request_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->timestamps();

            $table->foreign('request_id')->references('request_id')->on('tbl_borrow_requests')->onDelete('cascade');
            $table->foreign('item_id')->references('item_id')->on('tbl_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_borrow_request_summary');
    }
};
