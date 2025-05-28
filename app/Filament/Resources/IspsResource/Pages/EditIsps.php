<?php

namespace App\Filament\Resources\IspsResource\Pages;

use App\Filament\Resources\IspsResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditIsps extends EditRecord
{
    protected static string $resource = IspsResource::class;

    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Certificate Updated')
            ->body('The certificate has been updated successfull.');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
