<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadcheckTable extends Migration
{
    protected $connection = 'radius';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radcheck', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('attribute')->default('Auth-Type');
            $table->enum('op', [':='])->default(':=');
            $table->string('value')->default('Accept');
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
        Schema::dropIfExists('radcheck');
    }
}
