<?php

namespace App\Domain\IPABridge\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subnet extends Model
{
    protected $table = 'subnets';

    protected $fillable = [
        'prefix'
    ];

    public function powercodeAddressRanges(): HasMany
    {
        return $this->hasMany(PowercodeAddressRange::class);
    }
}
