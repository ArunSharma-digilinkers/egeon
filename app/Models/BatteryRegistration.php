<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatteryRegistration extends Model
{ use HasFactory;

    protected $fillable = [
        'dealer_id',
        'customer_name',
        'customer_mobile',
        'battery_model',
        'serial_number',
        'state',
        'warranty_start',
        'warranty_end',
    ];

    protected $casts = [
        'warranty_start' => 'datetime',
        'warranty_end' => 'datetime',
    ];

    // Dealer relationship
    public function dealer()
    {
        return $this->belongsTo(User::class, 'dealer_id');
    }
}
