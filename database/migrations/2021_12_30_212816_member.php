<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            //主鍵
            $table->increments('id');
            //圖片
            $table->string('cover',100)->default('error.jpg');
            //帳號
            $table->string('account',50);
            //密碼
            $table->string('password',100);
            //姓名
            $table->string('name',20);
            //網址
            $table->string('url',200);
            //性別
            $table->enum('gender', ['m', 'w'])->default('m');
            //狀態
            $table->enum('release', ['y', 'n'])->default('y');
            //描述
            $table->string('describe',255);
            //忘記密碼
            $table->string('token',255);
            //創建及修改日期
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
        Schema::dropIfExists('member');
    }
}
