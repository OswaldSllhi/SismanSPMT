<?php

namespace App\Filament\Resources\Iso37001Resource\Pages;

use App\Filament\Resources\Iso37001Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateIso37001 extends CreateRecord
{
    protected static string $resource = Iso37001Resource::class;

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
