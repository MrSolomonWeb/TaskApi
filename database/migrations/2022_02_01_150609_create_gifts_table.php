<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiftsTable extends Migration {

	public function up()
	{
		Schema::create('gifts', function(Blueprint $table) {
			$table->bigIncrements ('id');
			$table->string('name', 255);
			$table->json('gifts');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('gifts');
	}
}
