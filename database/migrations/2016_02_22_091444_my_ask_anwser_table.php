<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyAskAnwserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_ask_anwser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url')->unique();
            $table->tinyInteger('type'); //�ʴ����� 1 �� 2 ��
            $table->smallInteger('plat'); //��Դ 1 ֪�� 2 V2EX 3 segmentfault 4 stackflow
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
        Schema::drop('my_ask_anwser');
    }
}
