<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('genero', 50);
			$table->string('primer_nombre', 100);
			$table->string('primer_apellido', 100);
			$table->string('telefono', 10);
			$table->timestamps();
			$table->softDeletes();
			$table->string('segundo_nombre', 100)->nullable();
			$table->string('segundo_apellido', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
