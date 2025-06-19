<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'client_name',
        'location',
        'type',
        'surface',
        'power_requested',
        'usage',
        'panel_count',
        'total_power',
        'surface_required',
        'price_ht',
        'price_ttc',
    ];
}
