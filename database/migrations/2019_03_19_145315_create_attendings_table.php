<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendings', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('projectID');
			$table->string('tree_planterID');
			$table->string('planter_username');
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
		Schema::drop('attendings');
	}

}
