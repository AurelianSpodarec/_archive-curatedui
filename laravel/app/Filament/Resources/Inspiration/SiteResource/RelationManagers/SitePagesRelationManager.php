<?php

namespace App\Filament\Resources\Inspiration\SiteResource\RelationManagers;

use App\Filament\Resources\Inspiration\SitePageResource;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;


class SitePagesRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'pages';

    protected static ?string $recordTitleAttribute = 'site_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(SitePageResource::getFormSchema())
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(SitePageResource::getTableColumns())
            ->filters([
                //
            ]);
    }
}