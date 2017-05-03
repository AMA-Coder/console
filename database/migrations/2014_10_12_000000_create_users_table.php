<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('isInstructor');
            $table->text('image_path');
            $table->string('designation');
            $table->string('address');
            $table->string('biography');
            $table->string('language_id');
            $table->string('website');
            $table->string('google_address');
            $table->string('twitter_address');
            $table->string('facebook_address');
            $table->string('linkedin_address');
            $table->string('youtube_address');
            $table->tinyInteger('show_courses');
            $table->tinyInteger('email_notification');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
