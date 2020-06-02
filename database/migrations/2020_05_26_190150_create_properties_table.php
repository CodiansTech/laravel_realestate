<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longtext('description');
            $table->integer('price');
            $table->integer('area');
            $table->integer('rooms');
            $table->string('address');
            $table->string('city');
            $table->double('lat', 10, 8);
            $table->double('long', 11, 8);
            $table->string('zip');
            $table->boolean('status');
            $table->integer('propertytype_id');
            $table->integer('user_id');
            $table->boolean('approved'); // 0 = not approved; 1 = approved
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
        Schema::dropIfExists('properties');
    }
}
