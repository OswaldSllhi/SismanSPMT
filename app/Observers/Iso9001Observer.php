<?php

namespace App\Observers;

use App\Models\Iso9001;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class Iso9001Observer
{
    // public function created(Iso9001 $cert): void
    // {
    //     // Get the currently authenticated user
    //     $recipient = Auth::user();

    //     if ($recipient) {
    //         Notification::make()
    //             ->title("New {$cert->certification_type} Certificate Registered")
    //             ->body("ISO 9001 certificate for {$cert->branch} has been registered.")
    //             ->icon("heroicon-o-exclamation-triangle")
    //             ->sendToDatabase($recipient);
    //     }
    // }
}
