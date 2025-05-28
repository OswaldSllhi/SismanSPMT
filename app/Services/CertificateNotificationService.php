<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification;
use Illuminate\Notifications\DatabaseNotification;

// class CertificateNotificationService
// {
//     public function checkAndNotify(User $user, array $models): void
//     {
//         $now = now();
//         $threshold = $now->copy()->subDays(30);

//         foreach ($models as $model) {
//             $certificates = $model::where(function ($query) use ($threshold, $now) {
//                 $query->whereDate('surveillance_1_plan', '<=', $threshold)
//                     ->orWhereDate('surveillance_2_plan', '<=', $threshold)
//                     ->orWhereDate('renewal_plan', '<=', $threshold)
//                     ->orWhereDate('expired_date', '<=', $now);
//             })->get();

//             foreach ($certificates as $cert) {
//                 $isExpired = $cert->expired_date && $cert->expired_date->isPast();

//                 $notifTitle = $isExpired ? 'Sertifikat Sudah Expired' : 'Sertifikat Segera Kadaluarsa';
//                 $notifBody = $isExpired
//                     ? "⚠️ Sertifikat {$cert->certification_type} - Cabang {$cert->branch} sudah *expired* pada {$cert->expired_date?->format('d M Y')}."
//                     : "Sertifikat {$cert->certification_type} - Cabang {$cert->branch} mendekati tanggal surveillance atau renewal.";

//                 $alreadyExists = DatabaseNotification::where('notifiable_id', $user->id)
//                     ->where('notifiable_type', get_class($user))
//                     ->where('type', 'filament.notifications.database')
//                     ->where('data->certification_type', $cert->certification_type)
//                     ->where('data->branch', $cert->branch)
//                     ->where('data->expired_date', optional($cert->expired_date)->format('Y-m-d'))
//                     ->exists();

//                 if (!$alreadyExists) {
//                     Notification::make()
//                         ->title($notifTitle)
//                         ->body($notifBody)
//                         ->icon($isExpired ? 'heroicon-o-x-circle' : 'heroicon-o-exclamation-triangle')
//                         ->color($isExpired ? 'danger' : 'warning')
//                         ->persistent()
//                         ->sendToDatabase($user);
//                 }
//             }
//         }
//     }
// }
