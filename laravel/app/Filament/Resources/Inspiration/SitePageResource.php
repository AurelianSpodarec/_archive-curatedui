<?php

namespace App\Filament\Resources\Inspiration;

use App\Filament\Resources\Inspiration\SitePageResource\Pages;
use App\Filament\Resources\Inspiration\SitePageResource\RelationManagers;

use App\Models\Site\SitePage;
use App\Models\Site\SitePageVariation;

use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

use Filament\Tables;

use Illuminate\Support\Str;

class SitePageResource extends Resource
{
    protected static ?string $model = SitePage::class;

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
    
   
    public static function getFormSchema(string $layout = Forms\Components\Grid::class): array
    {
        return [
            $layout::make()
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(SitePage::class, 'slug', fn ($record) => $record),
                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpan([
                        'sm' => 2,
                    ]),
            ])->columns([
                'sm' => 2,
            ]),
            Forms\Components\HasManyRepeater::make('allImages')
                ->relationship('allImages')
                ->schema([    
                    // Forms\Components\TextInput::make('id')
                    //     ->disabled()
                    //     ->label('ID')
                    //     ->required(),
                    SpatieMediaLibraryFileUpload::make('media')
                        ->collection('image')
                        ->multiple()
                        ->maxFiles(5),
            ])
            ->columnSpan(1),
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

            Tables\Columns\TextColumn::make('site_category_page_id')
                ->label('Category Page')
                ->searchable()
                ->sortable()
                ->toggleable(),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->toggleable(),

            Tables\Columns\TextColumn::make('slug')
                ->searchable()
                ->sortable()
                ->toggleable(),

            // Tables\Columns\TextColumn::make('site_version_id')
            //     ->label('Version')
            //     ->searchable()
            //     ->sortable()
            //     ->toggleable(),
         
            
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
            'index' => Pages\ListSitePages::route('/'),
            'create' => Pages\CreateSitePage::route('/create'),
            'edit' => Pages\EditSitePage::route('/{record}/edit'),
        ];
    }
}
