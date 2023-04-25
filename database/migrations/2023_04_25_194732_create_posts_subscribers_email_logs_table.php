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
        Schema::create('posts_subscribers_email_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('website_post_id');
            $table->integer('website_subscriber_id');
            $table->boolean('is_sent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_subscribers_email_logs');
    }
};
