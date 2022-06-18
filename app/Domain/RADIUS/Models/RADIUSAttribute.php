<?php

namespace App\Domain\RADIUS\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RADIUSAttribute extends Model
{
    protected $connection = 'radius';
    protected $table = 'radreply';

    public function user(): BelongsTo
    {
        return $this->belongsTo(RADIUSUser::class, 'username', 'username');
    }
}
