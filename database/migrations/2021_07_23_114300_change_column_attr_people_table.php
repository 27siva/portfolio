<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnAttrPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people',function(Blueprint $table){
            $table->string('mail',120)->nullable()->change();
            $table->integer('age')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people',function(Blueprint $table){
            $table->string('mail',120)->nullable(false)->change();
            $table->integer('age')->nullable(false)->change();

        });
    }
}
