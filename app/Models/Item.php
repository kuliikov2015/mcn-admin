<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function steelType()
    {
        return $this->belongsTo(SteelType::class);
    }

    public function rollType()
    {
        return $this->belongsTo(RollType::class);
    }
}
