<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details')->nullable();
            $table->string("request_type");
            $table->string('audience')->nullable();
//            $table->boolean('students')->nullable();
//            $table->boolean('faculty_staff')->nullable();
//            $table->boolean('community')->nullable();
//            $table->boolean('alumni')->nullable();
            $table->text('facebook_text')->nullable();
            $table->text('twitter_text')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('department')->nullable();
//            $table->text('how')->nullable();
            $table->string('social')->nullable();
//            $table->boolean('facebook')->nullable();
//            $table->boolean('twitter')->nullable();
//            $table->boolean('instagram')->nullable();
//            $table->boolean('youtube')->nullable();
            $table->string('status')->default("Received");
            $table->integer('service_requests_id');
//            $table->integer('clients_id');
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
        Schema::dropIfExists('social_media');
    }
}
