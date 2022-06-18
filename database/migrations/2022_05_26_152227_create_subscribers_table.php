<?php

use App\Domain\IPABridge\Models\Subnet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Subnet::class);
            $table->unsignedBigInteger('pc_equipment_id')->default(null)->nullable()->unique();
            $table->unsignedBigInteger('pc_customer_id')->default(null)->nullable();
            $table->unsignedBigInteger('pc_service_id')->default(null)->nullable();
            $table->unsignedBigInteger('pc_address_range_id')->default(null)->nullable();
            $table->string('ipv4')->default(null)->nullable()->unique();
            $table->string('prefix')->default(null)->nullable()->unique();
            $table->macAddress('mac')->default(null)->nullable()->unique();
            $table->string('pc_status')->default(null)->nullable();
            $table->unsignedBigInteger('downloadSpeedKb')->default(null)->nullable();
            $table->unsignedBigInteger('uploadSpeedKb')->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
}
