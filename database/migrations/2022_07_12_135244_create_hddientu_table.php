<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHddientuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hddientu', function (Blueprint $table) {

            $table->increments('id');
            $table->string('MST');
            $table->string('mauso');
            $table->string('kyhieu');
            $table->string('sohoadon');
            $table->decimal('sotien', 10, 2);
            $table->string('matracuu');
            $table->string('diachitracuu');
            $table->date('ngayhoadon');
            $table->string('nguoithanhtoan');
            $table->date('ngaythanhtoan');
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
        Schema::dropIfExists('hddientu');
    }
}
