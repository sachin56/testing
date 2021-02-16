<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('em_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middlename');
            $table->mediumText('address');
            $table->string('zip');
            $table->date('birthdate');
        
             
            // $table->unsignedInteger('department_id')->unsigned();
            // $table->unsignedInteger('city_id')->unsigned();
            // $table->unsignedInteger('state_id')->unsigned();
            // $table->unsignedInteger('country_id')->unsigned();
            
              //Add foreign key constraints to these columns
             
            // $table->foreign('department_id')->references('d_id')->on('department_table');
            // $table->foreign('city_id')->references('c_id')->on('cities_table');
            // $table->foreign('state_id')->references('s_id')->on('states_table');
            // $table->foreign('country_id')->references('em_id')->on('countries_table');    
            // $table->softDeletes();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
