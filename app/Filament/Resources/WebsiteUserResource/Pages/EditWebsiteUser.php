<?php

namespace App\Filament\Resources\WebsiteUserResource\Pages;

use App\Filament\Resources\WebsiteUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteUser extends EditRecord
{
    protected static string $resource = WebsiteUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
