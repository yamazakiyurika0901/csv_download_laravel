<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('condition_id')->unsigned();
            $table->integer('design_id')->unsigned();
            $table->string('email');
            $table->string('tel_number');
            $table->string('fax_number');
            $table->integer('zipcode');
            $table->string('pref');
            $table->string('city');
            $table->string('street');
            $table->string('surname');
            $table->string('name');
            $table->string('memo');
            $table->string('private_memo');
            $table->tinyinteger('status')->default(1);
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
