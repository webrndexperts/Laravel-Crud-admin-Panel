<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_digital_card', function (Blueprint $table) {
            $table->id(); 
            $table->string('profile_type');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('designation');
            $table->string('website');
            $table->string('phone_number');
            $table->string('telephone_number');
            $table->string('whatsapp_number');
            $table->string('fax');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('linkedin_url');
            $table->string('instagram_url');
            $table->string('youtube_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_digital_card');
    }
};
