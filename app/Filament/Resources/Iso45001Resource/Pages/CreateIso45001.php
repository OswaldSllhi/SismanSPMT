<?php

namespace App\Filament\Resources\Iso45001Resource\Pages;

use App\Filament\Resources\Iso45001Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateIso45001 extends CreateRecord
{
    protected static string $resource = Iso45001Resource::class;

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
