<?php

namespace App\Domain\IPABridge\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PowercodeAddressRange extends Model
{
    protected $connection = 'mysql';
    protected $table = 'powercode_address_ranges';
    protected $primaryKey = 'pc_address_range_id';
    public $incrementing = false;

    public function subnet(): BelongsTo
    {
        return $this->belongsTo(Subnet::class);
    }
}
