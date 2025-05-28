<?php

namespace App\Filament\Resources\Iso9001Resource\Pages;

use App\Filament\Resources\Iso9001Resource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateIso9001 extends CreateRecord
{
    protected static string $resource = Iso9001Resource::class;

    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
    
}
