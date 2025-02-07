#!/bin/bash

echo "Generating category resource"

# Create Filament Resource for Category
php artisan make:filament-resource Category --generate

echo "Generating product resource"
# Create Filament Resource for Product
php artisan make:filament-resource Product --generate

# Wait for files to be generated
sleep 2

# Writing Category Filament Resource
cat <<EOL > app/Filament/Resources/CategoryResource.php
<?php

namespace App\\Filament\\Resources;

use App\\Filament\\Resources\\CategoryResource\\Pages;
use App\\Models\\Category;
use Filament\\Forms;
use Filament\\Resources\\Resource;
use Filament\\Tables;
use Filament\\Forms\\Components\\TextInput;
use Filament\\Tables\\Columns\\TextColumn;

class CategoryResource extends Resource
{
    protected static ?string \$model = Category::class;
    protected static ?string \$navigationIcon = 'heroicon-o-collection';
    protected static ?string \$navigationLabel = 'Categories';
    protected static ?string \$pluralLabel = 'Categories';

    public static function form(Forms\\Form \$form): Forms\\Form
    {
        return \$form->schema([
            TextInput::make('name')->required()->unique(ignoreRecord: true),
            TextInput::make('slug')->disabled()->dehydrated(),
        ]);
    }

    public static function table(Tables\\Table \$table): Tables\\Table
    {
        return \$table->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('slug')->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\\ListCategories::route('/'),
            'create' => Pages\\CreateCategory::route('/create'),
            'edit' => Pages\\EditCategory::route('/{record}/edit'),
        ];
    }
}
EOL

# Writing Product Filament Resource
cat <<EOL > app/Filament/Resources/ProductResource.php
<?php

namespace App\\Filament\\Resources;

use App\\Filament\\Resources\\ProductResource\\Pages;
use App\\Models\\Product;
use Filament\\Forms;
use Filament\\Resources\\Resource;
use Filament\\Tables;
use Filament\\Forms\\Components\\TextInput;
use Filament\\Forms\\Components\\Select;
use Filament\\Forms\\Components\\Textarea;
use Filament\\Forms\\Components\\Repeater;
use Filament\\Forms\\Components\\FileUpload;
use Filament\\Tables\\Columns\\TextColumn;
use Filament\\Tables\\Columns\\ImageColumn;

class ProductResource extends Resource
{
    protected static ?string \$model = Product::class;
    protected static ?string \$navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string \$navigationLabel = 'Products';
    protected static ?string \$pluralLabel = 'Products';

    public static function form(Forms\\Form \$form): Forms\\Form
    {
        return \$form->schema([
            TextInput::make('name')->required()->unique(ignoreRecord: true),
            TextInput::make('slug')->disabled()->dehydrated(),
            Textarea::make('description')->nullable(),
            TextInput::make('price')->required()->numeric(),
            TextInput::make('sales_price')->nullable()->numeric(),
            Select::make('category_id')
                ->relationship('category', 'name')
                ->searchable()
                ->required(),
            Repeater::make('sizes')->schema([
                TextInput::make('size')->required(),
            ])->columnSpanFull(),
            Repeater::make('stock')->schema([
                TextInput::make('size')->required(),
                TextInput::make('quantity')->required()->numeric(),
            ])->columnSpanFull(),
            FileUpload::make('images')
                ->multiple()
                ->image()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Tables\\Table \$table): Tables\\Table
    {
        return \$table->columns([
            TextColumn::make('id')->sortable(),
            ImageColumn::make('images')->limit(1),
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('category.name')->sortable(),
            TextColumn::make('price')->sortable(),
            TextColumn::make('sales_price')->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\\ListProducts::route('/'),
            'create' => Pages\\CreateProduct::route('/create'),
            'edit' => Pages\\EditProduct::route('/{record}/edit'),
        ];
    }
}
EOL

echo "Filament setup completed! You can access the admin panel at /admin"
