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
            $table->renameColumn('user_id', 'id');
            $table->renameColumn('user_email', 'email');
            $table->renameColumn('user_name', 'name');
            $table->renameColumn('user_password', 'password');
            $table->renameColumn('user_email_verified_at', 'email_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('user_id', 'id');
            $table->renameColumn('user_email', 'email');
            $table->renameColumn('user_password', 'password');
            $table->renameColumn('user_email_verified_at', 'email_verified_at');
        });
    }
};
