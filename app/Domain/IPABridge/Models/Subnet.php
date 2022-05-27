<?php

namespace App\Domain\IPABridge\Models;

use Illuminate\Database\Eloquent\Model;

class Subnet extends Model
{
    protected $table = 'subnets';

    protected $fillable = [
        'prefix'
    ];
}
