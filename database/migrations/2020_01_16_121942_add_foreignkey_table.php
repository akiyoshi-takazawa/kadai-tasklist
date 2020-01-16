<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            
            //タスクを投稿したユーザIDの追加
            $table->integer('user_id')->unsigned()->index();
            
           // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            
            //タスクを投稿したユーザIDの追加
            $table->dropColumn('user_id')->unsigned()->index();
            
        });
    }
}