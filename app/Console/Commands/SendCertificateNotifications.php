<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Services\CertificateNotificationService;

// class SendCertificateNotifications extends Command
// {
//     protected $signature = 'notifications:send-certificates';
//     protected $description = 'Kirim notifikasi sertifikat berkala ke semua user';

//     public function handle()
//     {
//         $service = app(CertificateNotificationService::class);

//         $models = [
//             \App\Models\Iso9001::class,
//             \App\Models\Iso14001::class,
//             \App\Models\Iso45001::class,
//             \App\Models\Iso37001::class,
//             \App\Models\ISPS::class,
//         ];

//         User::each(function ($user) use ($service, $models) {
//             $service->checkAndNotify($user, $models);
//         });

//         $this->info('Notifikasi sertifikat berhasil dikirim ke semua user.');
//     }
// }
