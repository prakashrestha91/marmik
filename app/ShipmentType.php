<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentType extends Model
{
    protected $fillable = [
        'name', 'price',
    ];

}
