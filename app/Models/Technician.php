<?php

namespace App\Models;

use App\Models\Billing;
use App\Models\TechnicianRole;
use Database\Factories\TechnicianFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technician extends Model
{

    use HasFactory;

    protected static function newFactory() : TechnicianFactory
    {
        return TechnicianFactory::new();
    }

    public function technicianRole(){
        return $this->belongsTo(TechnicianRole::class, 'role_id');
    }

    public function billing()
    {
        return $this->hasMany(Billing::class, 'technician_id');
    }


}
