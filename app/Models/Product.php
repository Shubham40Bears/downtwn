<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price', 'sales_price', 'category_id', 'sizes', 'stock', 'images'];

    protected $casts = [
        'sizes' => 'array',
        'stock' => 'array',
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }
    /**
     * Get the product by its ID.
     *
     * @param  int  $id
     * @return \App\Models\Product|null
     */
    public static function byId($id)
    {
        return self::find($id);
    }
}
