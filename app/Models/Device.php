<?php

namespace App\Models;

use App\Models\Billing;
use App\Models\Product;
use Database\Factories\DeviceFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{

    use HasFactory;

    protected static function newFactory() : DeviceFactory
    {
        return DeviceFactory::new();
    }

    public function billing()
    {
        return $this->hasMany(Billing::class, 'device_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'device_id');
    }
}
