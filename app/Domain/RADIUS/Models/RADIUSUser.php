<?php

namespace App\Domain\RADIUS\Models;

use Illuminate\Database\Eloquent\Model;

class RADIUSUser extends Model
{
    protected $connection = 'radius';
    protected $table = 'radcheck';

    public function attributes() {
        return $this->hasMany(RADIUSAttribute::class, 'username', 'username');
    }
}
