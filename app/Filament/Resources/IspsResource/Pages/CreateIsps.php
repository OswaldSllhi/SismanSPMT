<?php

namespace App\Filament\Resources\IspsResource\Pages;

use App\Filament\Resources\IspsResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateIsps extends CreateRecord
{
    protected static string $resource = IspsResource::class;

    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
        ->success()
        ->title('Certificate Registered')
        ->body('The certificate has been created successfully');
    }
}
