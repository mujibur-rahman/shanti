<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdPositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_positions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('title', array('Top Large Leaderboard Ad Box-1 (w:h-1170px:auto)', 'Small Rectangle Ad Box-1 (w:h-270px:190px)','Vertical Rectangle Ad Box-1 (w:h-270px:500px)', 'Large Rectangle Ad Box-1 (w:h-370px:155px)','Double Billboard Ad Box-1 (w:h-770px:155px)'));
			$table->enum('type', array('Image', 'Flash'));
			$table->string('details')->nullable();
			$table->string('duration', 128)->nullable();
			$table->double('rate', 10, 2)->nullable();
			$table->tinyInteger('maximum_ad_limit')->nullable();
			$table->boolean('is_active');
			$table->string('sort')->nullable();
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
		Schema::drop('ad_positions');
	}

}
