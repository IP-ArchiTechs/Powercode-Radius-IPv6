<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadreplyTable extends Migration
{
    protected $connection = 'radius';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radreply', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('attribute');
            $table->enum('op', [':='])->default(':=');
            $table->string('value');
            $table->timestamps();

            $table->unique(['username', 'attribute']);
            $table->foreign('username')->references('username')->on('radcheck');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radreply');
    }
}
