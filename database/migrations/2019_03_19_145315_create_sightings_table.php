<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSightingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sightings', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('woodlandID');
			$table->date('date');
			$table->time('time');
			$table->boolean('type');
			$table->string('description');
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
		Schema::drop('sightings');
	}

}
