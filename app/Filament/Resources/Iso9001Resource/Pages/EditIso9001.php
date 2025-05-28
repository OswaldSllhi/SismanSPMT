<?php

namespace App\Filament\Resources\Iso9001Resource\Pages;

use App\Filament\Resources\Iso9001Resource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditIso9001 extends EditRecord
{
    protected static string $resource = Iso9001Resource::class;

    protected function getRedirectUrl(): string
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
