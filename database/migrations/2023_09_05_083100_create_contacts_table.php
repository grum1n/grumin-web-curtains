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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_logo_big_text');
            $table->string('site_logo_small_text');
            $table->string('address');
            $table->string('google_maps_link')->nullable();
            $table->string('email');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('facebook_acc')->nullable();
            $table->string('instagram_acc')->nullable();
            $table->string('twitter_acc')->nullable();
            $table->string('linkedin_acc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
