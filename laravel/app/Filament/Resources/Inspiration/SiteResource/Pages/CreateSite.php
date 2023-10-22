<?php

namespace App\Filament\Resources\Inspiration\SiteResource\Pages;

use App\Filament\Resources\Inspiration\SiteResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSite extends CreateRecord
{
    protected static string $resource = SiteResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
    
        return $data;
    }
}
