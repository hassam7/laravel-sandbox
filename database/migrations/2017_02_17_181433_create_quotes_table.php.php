<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration{
     public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('text');
            $table->string('author',20)->nullable();
            $table->timestamps();
        });
       
    }

     public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
