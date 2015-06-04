<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
      Schema::create('contacts', function(Blueprint $table)
       {
         $table->increments('id');
         $table->integer('application_id')->unsigned();
         $table->foreign('application_id')->references('id')->on('applications');
         $table->string('type')->nullable();
         $table->string('direction')->nullable();
         $table->text('notes_public')->nullable();
         $table->text('notes_private')->nullable();
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
       Schema::drop('contacts');
     }
}
