<?php

namespace App\Domain\RADIUS\Models;

use Illuminate\Database\Eloquent\Model;

class RADIUSAttribute extends Model
{
    protected $connection = 'radius';
    protected $table = 'radreply';

    public function user() {
        return $this->belongsTo(RADIUSUser::class, 'username', 'username');
    }
}
