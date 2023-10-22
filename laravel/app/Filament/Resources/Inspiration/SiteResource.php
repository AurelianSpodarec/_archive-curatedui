<?php

namespace App\Filament\Resources\Inspiration;

use App\Filament\Resources\Inspiration\SiteResource\Pages;
use App\Filament\Resources\Inspiration\SiteResource\RelationManagers;
use App\Models\Site\Site;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Illuminate\Support\Str;

class SiteResource extends Resource
{
    protected static ?string $model = Site::class;

    protected static ?string $navigationGroup = 'Inspiration';
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

    public static function getFormSchema(string $layout = Forms\Components\Grid::class): array
    {
    
        return [
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->required()
                        ->unique(Site::class, 'slug', fn ($record) => $record),
                    Forms\Components\MarkdownEditor::make('description')
                        ->columnSpan([
                            'sm' => 2,
                        ]), 
                ])->columns([
                    'sm' => 2,
                ])->columnSpan([
                    'sm' => 2,
                ]),
    
                Forms\Components\Group::make()->schema([
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Status'),
                            Forms\Components\Group::make()
                                ->schema([
                                    Forms\Components\Toggle::make('is_visible')
                                        ->label('Visible')
                                        ->helperText('This company will be hidden from displaying.')
                                        ->default(false),
                                ]),
                        ])
                        ->columns(1),    
                ])->columnSpan(1),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\BooleanColumn::make('is_visible')
                    ->label('Visibility')
                    ->sortable(),
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
            RelationManagers\SitePagesRelationManager::class,
            RelationManagers\SiteComponentsRelationManager::class,
            RelationManagers\SiteOGImagesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSites::route('/'),
            'create' => Pages\CreateSite::route('/create'),
            'edit' => Pages\EditSite::route('/{record}/edit'),
        ];
    }
}
