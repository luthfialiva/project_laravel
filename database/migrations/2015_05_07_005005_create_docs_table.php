<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docs', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('id_doc', 30);
            $table->string('nama_doc', 100);
            $table->integer('id_user')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->integer('id_bidang')->unsigned();
            $table->date('start_date');
            $table->date('untill_date');
            $table->date('warn_date');
            $table->string('remarks');
            $table->integer('ket');
            $table->timestamps();

            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('kategoris');

            $table->foreign('id_bidang')
                  ->references('id_bidang')
                  ->on('bidangs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('docs');
	}

}
