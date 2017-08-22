<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->string('audience')->nullable();
//            $table->boolean('students')->nullable();
//            $table->boolean('faculty_staff')->nullable();
//            $table->boolean('community')->nullable();
//            $table->boolean('alumni')->nullable();
            $table->text('purpose')->nullable();
            $table->text('use')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
