<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carousel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            //主鍵
            $table->increments('id');
            //排序
            $table->integer('sort');
            //圖片
            $table->string('cover',100)->default('error.jpg');
            //標題
            $table->string('title',100);
            //狀態
            $table->enum('release', ['y', 'n'])->default('y');
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
        Schema::dropIfExists('carousel');
    }
}
