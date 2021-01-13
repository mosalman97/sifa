<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nameofDirector');
            $table->string('youremail');
            $table->string('directoremail');
            $table->string('yourcontact');
            $table->string('directorcontact');
            $table->string('designation');
            $table->string('companyurl');
            $table->string('organisationname');
            $table->string('officalfacebook');
            $table->mediumText('address');
            $table->mediumText('mainproduct');
            $table->string('yearofestnt');
            $table->string('keyuspofyour');
            $table->string('totalemployees');
            $table->string('categoryapplyfor');
            $table->mediumText('anyawards');
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
        Schema::dropIfExists('messages');
    }
}
