<?php

namespace App\Filament\Resources\Iso14001Resource\Pages;

use App\Filament\Resources\Iso14001Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditIso14001 extends EditRecord
{
    protected static string $resource = Iso14001Resource::class;

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
