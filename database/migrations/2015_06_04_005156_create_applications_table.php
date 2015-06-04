<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
    Schema::create('applications', function(Blueprint $table)
     {
       $table->increments('id');
       $table->integer('job_id')->unsigned();
       $table->foreign('job_id')->references('id')->on('jobs');
       $table->string('resume_url')->nullable();
       $table->text('cover_letter')->nullable();
       $table->text('notes_public')->nullable();
       $table->text('notes_private')->nullable();
       $table->datetime('submitted_at')->nullable();
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
     Schema::drop('applications');
   }
}
