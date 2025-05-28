<?php

namespace App\Filament\Resources\IspsResource\Pages;

use App\Filament\Resources\IspsResource;
use App\Models\ISPS;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class ListIsps extends ListRecords
{
    protected static string $resource = IspsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

// public function mount(): void
// {
//     parent::mount();

//     $user = Auth::user();
//     $now = now()->setTimezone('Asia/Jakarta');
//     $threshold = $now->copy()->subDays(30);

//     $certificates = ISPS::where(function ($query) use ($threshold, $now) {
//         $query->whereDate('surveillance_1_plan', '<=', $threshold)
//             ->orWhereDate('surveillance_2_plan', '<=', $threshold)
//             ->orWhereDate('renewal_plan', '<=', $threshold)
//             ->orWhereDate('expired_date', '<=', $now);
//     })->get();

//     foreach ($certificates as $cert) {
//         $isExpired = $cert->expired_date && $cert->expired_date->isPast();

//         $notifTitle = $isExpired
//             ? 'Sertifikat Sudah Expired'
//             : 'Sertifikat Segera Kadaluarsa';

//         $notifBody = $isExpired
//             ? "⚠️ Sertifikat {$cert->certification_type} - Cabang {$cert->branch} sudah *expired* pada {$cert->expired_date?->format('d M Y')}."
//             : "Sertifikat {$cert->certification_type} - Cabang {$cert->branch} mendekati tanggal surveillance atau renewal.";

//         $alreadyExists = DatabaseNotification::where('notifiable_id', $user->id)
//             ->where('notifiable_type', get_class($user))
//             ->where('type', 'filament.notifications.database')
//             ->where('data->title', $notifTitle)
//             ->where('data->body', $notifBody)
//             ->exists();

//         if (!$alreadyExists) {
//             Notification::make()
//                 ->title($notifTitle)
//                 ->body($notifBody)
//                 ->icon($isExpired ? 'heroicon-o-x-circle' : 'heroicon-o-exclamation-triangle')
//                 ->color($isExpired ? 'danger' : 'warning')
//                 ->persistent()
//                 ->sendToDatabase($user);
//         }
//     }
// }
}
