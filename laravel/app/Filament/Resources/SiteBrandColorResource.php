<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteBrandColorResource\Pages;
use App\Filament\Resources\SiteBrandColorResource\RelationManagers;
use App\Models\Site\SiteBrandColor;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SiteBrandColorResource extends Resource
{
    protected static ?string $model = SiteBrandColor::class;

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
                Tables\Columns\TextColumn::make('name'),            
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('hex'),
                Tables\Columns\TextColumn::make('published_at'),
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
            'index' => Pages\ListSiteBrandColors::route('/'),
            'create' => Pages\CreateSiteBrandColor::route('/create'),
            'edit' => Pages\EditSiteBrandColor::route('/{record}/edit'),
        ];
    }
}
