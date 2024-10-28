<?php

namespace App\Models;

use App\Models\Technician;
use Database\Factories\TechnicianFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TechnicianRole extends Model
{

    use HasFactory;

    protected static function newFactory() : TechnicianFactory
    {
        return TechnicianFactory::new();
    }

    public function technician()
    {
        return $this->hasMany(Technician::class, 'role_id');
    }
}
