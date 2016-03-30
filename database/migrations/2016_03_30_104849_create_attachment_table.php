<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentTable extends Migration
{
    /**
     * �洢�ϴ�����ţ�Ƶ�ý���ļ���Ϣ
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->string('url');
            $table->string('type');
            $table->string('size');
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
        Schema::drop('attachment');
    }
}
