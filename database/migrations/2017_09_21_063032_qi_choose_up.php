<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QiChooseUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qi_choose_up', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name',64);
            $table->string('client_phone',13);
            $table->string('services',64);
            $table->integer('created_at');
            $table->integer('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('qi_choose_up')){
            Schema::dropIfExists('qi_choose_up');
        }
    }
}
