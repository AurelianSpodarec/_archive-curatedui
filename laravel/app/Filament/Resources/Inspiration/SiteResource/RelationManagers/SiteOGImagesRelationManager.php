<?php

namespace App\Filament\Resources\Inspiration\SiteResource\RelationManagers;

use App\Filament\Resources\Inspiration\SiteOGImageResource;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteOGImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'ogimages';

    protected static ?string $recordTitleAttribute = 'site_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(SiteOGImageResource::getFormSchema())
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns(SiteOGImageResource::getTableColumns())
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
