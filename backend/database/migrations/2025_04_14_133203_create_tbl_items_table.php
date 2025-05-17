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
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->id('item_id'); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 255);
            $table->unsignedInteger('category_id');
            $table->string('unit', 20);
            $table->date('acquisition_date')->nullable();
            $table->integer('borrowed_count')->default(0);

            // Explicit timestamp columns
            $table->timestamp('date_created')->useCurrent();
            $table->timestamp('date_updated')->useCurrent()->useCurrentOnUpdate();

            // Foreign key constraint
            $table->foreign('category_id')
                ->references('category_id')
                ->on('tbl_item_category')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_items');
    }
};
