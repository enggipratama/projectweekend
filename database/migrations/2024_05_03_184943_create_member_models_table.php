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
        Schema::create('member_models', function (Blueprint $table) {
            $table->id('member_id');
            $table->foreignId('project_id');
            $table->foreignId('user_id');
            $table->foreignId('member_role_id');
            $table->string('member_name')->required();
            $table->string('member_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_models');
    }
};
