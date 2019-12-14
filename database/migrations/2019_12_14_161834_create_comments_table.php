<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCommentsTable extends Migration
{
public function up()
{
Schema::create('comments', function (Blueprint $table) {
$table->increments('id');
$table->text('content');
$table->integer('post_id');
$table->integer('user_id');
$table->tinyInteger('status')->default(1);
$table->timestamps();
});
}
public function down()
{
Schema::drop('comments');
}
}
