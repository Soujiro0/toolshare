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
        Schema::create('tbl_borrow_requests', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->string('user_id');
            $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED', 'CLAIMED', 'RETURNED'])->default('PENDING');
            $table->text('purpose')->nullable();
            $table->text('remarks')->nullable();
            $table->string('handled_by')->nullable();
            $table->timestamp('request_date')->useCurrent();
            $table->timestamp('return_date')->nullable();
            $table->timestamp('processed_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('tbl_users')->onDelete('cascade');
            $table->foreign('handled_by')->references('user_id')->on('tbl_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_borrow_requests');
    }
};
