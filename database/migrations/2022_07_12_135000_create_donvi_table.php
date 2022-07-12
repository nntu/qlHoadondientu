<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donvi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MST')->unique();
            $table->string('TenDonVi');
            $table->string('DiaChi')->nullable();;
            $table->string('DienThoai')->nullable();
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
        Schema::dropIfExists('donvi');
    }
}
