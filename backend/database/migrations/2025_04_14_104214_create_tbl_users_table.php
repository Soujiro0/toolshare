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
            // $table->bigIncrements('user_id');
            $table->string('user_id')->primary(); // custom user ID
            $table->string('username', 255)->unique();
            $table->string('name', 100);
            $table->string('password', 255);
            $table->string('email', 255)->unique();

            $table->unsignedInteger('role_id');

            $table->timestamps();

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
