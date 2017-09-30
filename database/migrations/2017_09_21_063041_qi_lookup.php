<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QiLookup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qi_lookup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lp_phone',13);
            $table->string('lp_company',64);
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
        if(Schema::hasTable('qi_lookup')){
            Schema::dropIfExists('qi_lookup');
        }
    }
}
