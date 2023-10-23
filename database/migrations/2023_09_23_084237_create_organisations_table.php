<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // Name field as a string
            $table->string('address'); // Address field as a string
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
