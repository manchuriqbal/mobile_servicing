<?php

namespace App\Models;

use App\Models\Product;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected static function newFactory() : CategoryFactory
    {
        return CategoryFactory::new();
    }

    public function category()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
