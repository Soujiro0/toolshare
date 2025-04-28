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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('user_id'); // Primary key, BIGINT, UNSIGNED, AUTO_INCREMENT

            $table->string('username', 255)->unique();
            $table->string('name', 100);
            $table->string('password', 255);
            $table->string('email', 255)->unique();

            $table->unsignedInteger('role_id'); // INT UNSIGNED

            $table->timestamp('date_created')->useCurrent();
            $table->timestamp('last_updated')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('role_id')
                ->references('role_id')
                ->on('tbl_roles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_users');
    }
};
