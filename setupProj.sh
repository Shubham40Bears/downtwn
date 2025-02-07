#!/bin/bash

echo "Setting up Laravel Product and Category..."

# Create Migrations
php artisan make:migration create_categories_table --create=categories
php artisan make:migration create_products_table --create=products

# Create Models
php artisan make:model Category
php artisan make:model Product

# Create Controller
php artisan make:controller ProductController

# Wait for Laravel to generate files
sleep 2

# Writing Migration for Categories
cat <<EOL > database/migrations/*_create_categories_table.php
<?php

use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('categories', function (Blueprint \$table) {
            \$table->id();
            \$table->string('name')->unique();
            \$table->string('slug')->unique();
            \$table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
EOL

# Writing Migration for Products (With sales_price)
cat <<EOL > database/migrations/*_create_products_table.php
<?php

use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint \$table) {
            \$table->id();
            \$table->string('name');
            \$table->string('slug')->unique();
            \$table->text('description')->nullable();
            \$table->decimal('price', 10, 2);
            \$table->decimal('sales_price', 10, 2)->nullable();
            \$table->unsignedBigInteger('category_id');
            \$table->json('sizes');
            \$table->json('stock');
            \$table->json('images');
            \$table->timestamps();

            \$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
EOL

# Writing Model for Category
cat <<EOL > app/Models/Category.php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Support\\Str;

class Category extends Model
{
    use HasFactory;

    protected \$fillable = ['name', 'slug'];

    public function products()
    {
        return \$this->hasMany(Product::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function (\$category) {
            \$category->slug = Str::slug(\$category->name);
        });
    }
}
EOL

# Writing Model for Product (With sales_price)
cat <<EOL > app/Models/Product.php
<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Support\\Str;

class Product extends Model
{
    use HasFactory;

    protected \$fillable = ['name', 'slug', 'description', 'price', 'sales_price', 'category_id', 'sizes', 'stock', 'images'];

    protected \$casts = [
        'sizes' => 'array',
        'stock' => 'array',
        'images' => 'array',
    ];

    public function category()
    {
        return \$this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function (\$product) {
            \$product->slug = Str::slug(\$product->name);
        });
    }
}
EOL

# Writing Controller for Product
cat <<EOL > app/Http/Controllers/ProductController.php
<?php

namespace App\\Http\\Controllers;

use App\\Models\\Product;
use App\\Models\\Category;
use Illuminate\\Http\\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::with('category')->get());
    }

    public function show(\$id, \$slug = null)
    {
        \$product = Product::where('id', \$id)
                          ->when(\$slug, fn (\$query) => \$query->where('slug', \$slug))
                          ->with('category')
                          ->firstOrFail();

        return response()->json(\$product);
    }

    public function getByCategory(\$categorySlug)
    {
        \$category = Category::where('slug', \$categorySlug)->firstOrFail();
        return response()->json(\$category->products);
    }
}
EOL

# Writing Routes for API
cat <<EOL > routes/api.php
<?php

use App\\Http\\Controllers\\ProductController;
use Illuminate\\Support\\Facades\\Route;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}/{slug?}', [ProductController::class, 'show']);
    Route::get('/category/{categorySlug}', [ProductController::class, 'getByCategory']);
});
EOL

echo "Running migrations..."
php artisan migrate

echo "Setup complete! API routes are available under /api/products"
