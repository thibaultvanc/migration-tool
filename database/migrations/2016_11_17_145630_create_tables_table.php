<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      echo "create Table tables";
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('database_id')->unsigned();
            $table->foreign('database_id')->references('id')->on('databases');
            $table->string('name');
            $table->boolean('is_old');
            $table->boolean('is_new');
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
        Schema::dropIfExists('tables');
    }
}
