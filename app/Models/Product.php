<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    use HasFactory;

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getNameAttribute()
    {
        return $this->category->name ?? 'No Category';
    }

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
