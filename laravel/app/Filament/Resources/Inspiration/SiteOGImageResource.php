<?php

namespace App\Filament\Resources\Inspiration;

use App\Filament\Resources\Inspiration\SiteOGImageResource\Pages;
use App\Filament\Resources\Inspiration\SiteOGImageResource\RelationManagers;
use App\Models\Inspiration\SiteOGImage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SiteOGImageResource extends Resource
{
    protected static ?string $model = SiteOGImage::class;

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
            ->columns(static::getTableColumns())
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

    public static function getFormSchema(string $layout = Forms\Components\Grid::class): array
    {
        return [
            $layout::make()
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->reactive()
              
            ])->columns([
                'sm' => 2,
            ]),
            
        ];
    }

    public static function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('ID')
                ->searchable()
                ->sortable(),
        
            Tables\Columns\TextColumn::make('site_id')
                ->label('Site ID')
                ->searchable()
                ->sortable()
                ->toggleable(),
         
            Tables\Columns\TextColumn::make('published_at')
                ->label('Publish Date')
                ->date()
                ->sortable()
                ->toggleable()
                ->toggledHiddenByDefault(),
        ];
    }   
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteOGImages::route('/'),
            'create' => Pages\CreateSiteOGImage::route('/create'),
            'edit' => Pages\EditSiteOGImage::route('/{record}/edit'),
        ];
    }
}
