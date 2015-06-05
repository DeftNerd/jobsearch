<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('jobs', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('company_id')->unsigned();
        $table->foreign('company_id')->references('id')->on('companies');
        $table->string('title');
        $table->string('slug')->nullable();
        $table->string('url')->nullable();
        $table->string('location')->nullable();
        $table->string('stage')->default('researching');
        $table->string('contact_name')->nullable();
        $table->string('contact_email')->nullable();
        $table->string('contact_phone')->nullable();
        $table->text('description')->nullable();
        $table->text('notes_public')->nullable();
        $table->text('notes_private')->nullable();
        $table->string('resume_url')->nullable();
        $table->text('cover_letter')->nullable();
        $table->datetime('applied_at')->nullable();
        $table->datetime('listed_at')->nullable();
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
      Schema::drop('jobs');
    }
}
