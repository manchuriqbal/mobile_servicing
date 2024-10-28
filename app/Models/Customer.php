<?php

namespace App\Models;

use App\Models\Billing;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected static function newFactory() : CustomerFactory
    {
        return CustomerFactory::new();
    }

    public function billing()
    {
        return $this->hasMany(Billing::class, 'customer_id');
    }
}
