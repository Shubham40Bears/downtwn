<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $pluralLabel = 'Products';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('name')->required()->unique(ignoreRecord: true),
            TextInput::make('slug')->disabled()->dehydrated(),
            Forms\Components\RichEditor::make('description')
            ->label('Description')
            ->required()
            ->toolbarButtons([
                'bold',
                'italic',
                'underline',
                'strike',
                'bulletList',
                'orderedList',
                'link',
                'codeBlock',
                'blockquote',
            ])
            ->columnSpanFull(),
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
                ->label('Product Image')
                ->multiple() // Allow multiple images
                ->image() // Restrict to image files
                ->maxSize(2048) // Max size in KB
                ->disk('cloudinary')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('id')->sortable(),
            Tables\Columns\ImageColumn::make('images.0') // Display the first image
                ->label('Image')
                ->size(50)
                ->getStateUsing(function ($record) {
                    $cloudinaryBaseUrl = 'https://res.cloudinary.com/shubhambhattacharya/image/upload/';
                    $imagePath = $record->images[0] ?? null;
                    return $imagePath ? $cloudinaryBaseUrl . $imagePath : null;
                }),
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('category.name')->sortable(),
            TextColumn::make('price')->sortable(),
            TextColumn::make('sales_price')->sortable(),
        
        ])
        ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);       
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
