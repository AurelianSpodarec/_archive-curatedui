<?php

namespace App\Filament\Resources\Inspiration;

use App\Filament\Resources\Inspiration\SitePageVariationsResource\Pages;
use App\Filament\Resources\Inspiration\SitePageVariationsResource\RelationManagers;
use App\Models\Inspiration\SitePageVariations;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SitePageVariationsResource extends Resource
{
    protected static ?string $model = SitePageVariations::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    // use Filament\Forms\Components\SpatieMediaLibraryImageColumn;
    // Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
    // ->label('Image')
    // ->collection('product-images'),
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSitePageVariations::route('/'),
            'create' => Pages\CreateSitePageVariations::route('/create'),
            'edit' => Pages\EditSitePageVariations::route('/{record}/edit'),
        ];
    }
}
