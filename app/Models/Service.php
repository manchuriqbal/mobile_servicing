<?php

namespace App\Models;

use App\Models\Billing;
use Database\Factories\ServiceFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{

    use HasFactory;

    protected static function newFactory() : ServiceFactory
    {
        return ServiceFactory::new();
    }

    public function billing()
    {
        return $this->hasMany(Billing::class, 'service_id');
    }
}
