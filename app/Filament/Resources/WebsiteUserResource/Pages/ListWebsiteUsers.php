<?php

namespace App\Filament\Resources\WebsiteUserResource\Pages;

use App\Filament\Resources\WebsiteUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebsiteUsers extends ListRecords
{
    protected static string $resource = WebsiteUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
