<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignPrintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_printings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details')->nullable();
            $table->string('audience')->nullable();
//            $table->boolean('students')->nullable();
//            $table->boolean('faculty_staff')->nullable();
//            $table->boolean('community')->nullable();
//            $table->boolean('alumni')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('dept')->nullable();
            $table->string('fund')->nullable();
            $table->string('class')->nullable();
            $table->string('grant_number')->nullable();
            $table->text('job_description')->nullable();
            $table->integer('copies')->nullable();
            $table->string('date_needed')->nullable();
            $table->string('services_needed')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('design_printings');
    }
}
