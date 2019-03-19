<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKurumlogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurumlogo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kurumadi')->nullable();
            $table->string('logo');
            $table->text('aciklama')->nullable();

            $table->integer('sira')->defaultvalue('1');
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
        Schema::dropIfExists('kurumlogo');
    }
}
