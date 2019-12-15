<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsProduct extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
			'product_comments',
			function (Blueprint $table) {
				$table->uuid('id');
				$table->string('product_id', 36);
				$table->bigIncrements('user_id');
				$table->foreign('user_id')->references('id')->on('users');
				$table->foreign('product_id')->references('id')->on('products');
				$table->text('comment');
				$table->softDeletes();
				$table->timestamps();
			}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('comments_product');
	}
}
