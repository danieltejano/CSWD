<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->string('first_name');           //John 
            $table->string('middle_name');          //John 
            $table->string('last_name');            //John 
            $table->string('extension_name');       //John 
            $table->date('birth_date');
            $table->string('birth_place');
            $table->integer('age')->nullable();
            $table->string('gender');
            $table->string('civil_status'); 
            $table->string('religion');
            $table->string('highest_educational_attainment');
            $table->string('occupation');
            $table->decimal('income', 8, 2);
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
        Schema::dropIfExists('personal_information');
    }
}
