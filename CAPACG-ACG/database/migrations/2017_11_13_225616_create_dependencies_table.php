<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //El metodo que crea esta tabla se encuentra en el archivo create_collaborators_table
        //esto debido a la referencia que tiene con activos
        // Schema::create('Dependencias',function(Blueprint $table){
        //     $table->increments('id'); 
        //     // $table->integer('activo_id')->unsigned()->nullable();
        //     // $table->foreign('activo_id')->references('id')->on('activos');
        //     $table->string('Dependencia')->unique();
           
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //el metodo para eliminar esta tabla se encuentra en el archivo create_collaborators_table
    }
}
