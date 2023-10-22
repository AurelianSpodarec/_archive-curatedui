<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteVariationResource\Pages;
use App\Filament\Resources\SiteVariationResource\RelationManagers;
use App\Models\Site\SiteVariation;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SiteVariationResource extends Resource
{
    protected static ?string $model = SiteVariation::class;

    protected static ?string $navigationGroup = 'Site Categories';
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
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('device'),            
                Tables\Columns\TextColumn::make('theme'),
                Tables\Columns\TextColumn::make('created_at')
                    ->datetime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->datetime(),
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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteVariations::route('/'),
            'create' => Pages\CreateSiteVariation::route('/create'),
            'edit' => Pages\EditSiteVariation::route('/{record}/edit'),
        ];
    }
}
