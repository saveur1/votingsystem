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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements("user_id");
            $table->string('user_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->date("date_of_birth");
            $table->string("mobile_number");
            $table->integer("party_id")->nullable();
            $table->string("user_image")->default("/images/profile_avatar.svg");
            $table->string("address");
            $table->string("national_id")->nullable();
            $table->string("gender")->nullable();
            $table->string("role")->default("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
