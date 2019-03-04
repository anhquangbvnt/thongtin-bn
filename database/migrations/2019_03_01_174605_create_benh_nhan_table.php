<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhNhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benh_nhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dia_chi');
            $table->string('tuoi');
            $table->string('phone', 15)->default('');
            $table->date('birthday')->default(date('Y-m-d'));
            $table->boolean('gioi_tinh')->comment('1 is men, 2 is women')->default(0);
            $table->date('ngay_kham')->default(date('y-m-d'));
            $table->string('ma_benh')->default('');
            $table->string('CLS')->default('');
            $table->string('thuoc')->default('');
            $table->tinyInteger('xoa')->default(0);
			$table->string('created_by', 20)->default('System');
			$table->string('updated_by', 20)->default('System');
			$table->timestamps();
			$table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benh_nhan');
    }
}
