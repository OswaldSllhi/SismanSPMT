<?php

namespace App\Filament\Resources\Iso45001Resource\Pages;

use App\Filament\Resources\Iso45001Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditIso45001 extends EditRecord
{
    protected static string $resource = Iso45001Resource::class;

    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Certificate Updated')
            ->body('The certificate has been updated successfully.');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
