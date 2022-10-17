<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudent1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student1', function (Blueprint $table) {
            
            
            /* Add additional fields */
            $table->increments('id');  // product title
            $table->text('fullname');   // description
            $table->date('birthday');   // short notes
            $table->text('address'); // product image
        
            
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
        Schema::dropIfExists('student1');
    }
}