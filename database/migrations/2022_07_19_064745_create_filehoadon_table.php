<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilehoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filehoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahd');
            $table->string('loaifile');
            $table->string('tenfile');
            $table->string('duongdanluutru');
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
        Schema::dropIfExists('filehoadon');
    }
}
