<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('companies', function(Blueprint $table)
      {
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('slug')->nullable();
      $table->string('url')->nullable();
      $table->text('notes_public')->nullable();
      $table->text('notes_private')->nullable();
      $table->string('location')->nullable();
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
      Schema::drop('companies');
    }
}
