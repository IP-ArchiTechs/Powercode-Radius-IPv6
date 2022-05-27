<?php

use App\Domain\IPABridge\Models\Subnet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressRangeSubnetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_range_subnet', function (Blueprint $table) {
            $table->foreignIdFor(Subnet::class);
            $table->unsignedBigInteger('pc_address_range_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_range_subnet');
    }
}
