<?php

use App\Domain\IPABridge\Models\Subnet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowercodeAddressRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('powercode_address_ranges', function (Blueprint $table) {
            $table->unsignedBigInteger('pc_address_range_id')->unique();
            $table->foreignIdFor(Subnet::class);
            $table->timestamps();

            $table->primary('pc_address_range_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('powercode_address_ranges');
    }
}
