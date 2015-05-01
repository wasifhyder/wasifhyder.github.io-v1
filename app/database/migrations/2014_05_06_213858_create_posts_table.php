<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('posts', function($table){
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('page_title', '255');// Title
            $table->string('page_name', 100);   // Name
            $table->string('page_content'); // Content
            $table->date('page_last_modified'); // Date Modified
            $table->integer('post_id');

	    });
    }
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('posts');
	}

}
