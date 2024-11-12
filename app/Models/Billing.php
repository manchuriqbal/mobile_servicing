<?php

namespace App\Models;

use App\Models\Device;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Technician;
use Database\Factories\BillingFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Billing extends Model
{

    use HasFactory;

    const PAYMENT_CASH = 'cash';
    const PAYMENT_CARD = 'card';

    protected $fillable = [
        'customer_id',
        'technician_id',
        'service_id',
        'device_name',
        'amount',
        'purchase_price',
        'payment_method',
        'comment'
    ];

    // Return available payment methods
    public static function getPaymentMethods()
    {
        return [self::PAYMENT_CASH, self::PAYMENT_CARD];
    }

    protected static function newFactory(): BillingFactory
    {
        return BillingFactory::new();
    }

    // Accessor to ensure valid payment methods
    public function setPaymentMethodAttribute($value)
    {
        if (!in_array($value, self::getPaymentMethods())) {
            throw new \InvalidArgumentException("Invalid payment method: {$value}");
        }
        $this->attributes['payment_method'] = $value;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class, 'technician_id');
    }


}
