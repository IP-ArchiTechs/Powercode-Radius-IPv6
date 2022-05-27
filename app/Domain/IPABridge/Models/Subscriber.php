<?php

namespace App\Domain\IPABridge\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscribers';

    protected $fillable = [
        'pc_equipment_id',
        'pc_customer_id',
        'pc_service_id',
        'pc_address_range_id',
        'ipv4',
        'mac',
        'pc_status',
        'downloadSpeedKb',
        'uploadSpeedKb'
    ];
}
