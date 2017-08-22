<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->string('audience')->nullable();
            $table->string('date_needed')->nullable();
            $table->string('assistance')->nullable();
            $table->text('other')->nullable();
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
        Schema::dropIfExists('presentations');
    }
}
