<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteCategoryTypeResource\Pages;
use App\Filament\Resources\SiteCategoryTypeResource\RelationManagers;
use App\Models\Site\SiteCategoryType;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SiteCategoryTypeResource extends Resource
{
    protected static ?string $model = SiteCategoryType::class;

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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteCategoryTypes::route('/'),
            'create' => Pages\CreateSiteCategoryType::route('/create'),
            'edit' => Pages\EditSiteCategoryType::route('/{record}/edit'),
        ];
    }
}
