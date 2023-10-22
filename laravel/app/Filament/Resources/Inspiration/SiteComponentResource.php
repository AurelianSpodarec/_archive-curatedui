<?php

namespace App\Filament\Resources\Inspiration;

use App\Filament\Resources\Inspiration\SiteComponentResource\Pages;
use App\Filament\Resources\Inspiration\SiteComponentResource\RelationManagers;
use App\Models\Site\SiteComponent;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SiteComponentResource extends Resource
{
    protected static ?string $model = SiteComponent::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema(static::getFormSchema(Forms\Components\Card::class))
        ->columns([
            'sm' => 3,
            'lg' => null,
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
            'index' => Pages\ListSiteComponents::route('/'),
            'create' => Pages\CreateSiteComponent::route('/create'),
            'edit' => Pages\EditSiteComponent::route('/{record}/edit'),
        ];
    }
}
