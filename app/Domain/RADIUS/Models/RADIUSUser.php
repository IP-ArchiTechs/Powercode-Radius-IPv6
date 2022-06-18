<?php

namespace App\Domain\RADIUS\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RADIUSUser extends Model
{
    protected $connection = 'radius';
    protected $table = 'radcheck';
    protected $fillable = ['username'];

    public function attributes(): HasMany
    {
        return $this->hasMany(RADIUSAttribute::class, 'username', 'username');
    }
}
