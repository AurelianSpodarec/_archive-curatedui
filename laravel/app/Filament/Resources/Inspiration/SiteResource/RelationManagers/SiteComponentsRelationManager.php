<?php

namespace App\Filament\Resources\Inspiration\SiteResource\RelationManagers;

use App\Filament\Resources\Inspiration\SiteComponentResource;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteComponentsRelationManager extends RelationManager
{
    protected static string $relationship = 'components';

    protected static ?string $recordTitleAttribute = 'site_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(SiteComponentResource::getFormSchema())
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns(SiteComponentResource::getTableColumns())
        ->filters([
            //
        ]);
    }    
}
