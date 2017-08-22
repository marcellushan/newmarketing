<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_releases', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details')->nullable();
//            $table->boolean('student_feature')->nullable();
//            $table->boolean('departmental_news')->nullable();
//            $table->boolean('student_news')->nullable();
//            $table->boolean('college_news')->nullable();
//            $table->boolean('alumni_feature')->nullable();
//            $table->boolean('research')->nullable();
//            $table->boolean('alumni_news')->nullable();
//            $table->boolean('recognition')->nullable();
//            $table->boolean('employee_feature')->nullable();
//            $table->boolean('award')->nullable();
//            $table->boolean('employee_news')->nullable();
//            $table->boolean('retirement')->nullable();
            $table->string('media_type')->nullable();
            $table->text('professional')->nullable();
            $table->string('promotional')->nullable();
            $table->string('audience')->nullable();
//            $table->boolean('students')->nullable();
//            $table->boolean('faculty_staff')->nullable();
//            $table->boolean('community')->nullable();
//            $table->boolean('alumni')->nullable();
            $table->string('quote_name_1')->nullable();
            $table->string('quote_email_1')->nullable();
            $table->string('quote_phone_1')->nullable();
            $table->string('quote_name_2')->nullable();
            $table->string('quote_email_2')->nullable();
            $table->string('quote_phone_2')->nullable();
            $table->string('quote_name_3')->nullable();
            $table->string('quote_email_3')->nullable();
            $table->string('quote_phone_3')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default("Received");
//            $table->integer('clients_id');
            $table->integer('service_requests_id');
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
        Schema::dropIfExists('press_releases');
    }
}
