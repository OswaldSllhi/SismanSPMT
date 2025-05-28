<?php

namespace App\Commands;

use App\Models\Iso9001;
use App\Models\User;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Console\Command;

class CheckIso9001Expiry extends Command
{
    protected $signature = 'check:iso9001-expiry';

    protected $description = 'Kirim notifikasi ke admin jika sertifikasi ISO 9001 mendekati tanggal pemeriksaan atau renewal';

    public function handle()
    {
        $today = Carbon::today();
        $threshold = $today->copy()->addDays(30);

        $certificates = Iso9001::where(function ($query) use ($threshold) {
            $query->whereDate('renewal_plan', '<=', $threshold)
                ->orWhereDate('surveillance_1_plan', '<=', $threshold)
                ->orWhereDate('surveillance_2_plan', '<=', $threshold);
        })->get();

        $adminUsers = User::where('user', true)->get(); // Sesuaikan kolom admin

        foreach ($certificates as $cert) {
            foreach ($adminUsers as $user) {
                Notification::make()
                    ->title('Peringatan Sertifikasi ISO')
                    ->body("Sertifikasi {$cert->certification_type} untuk cabang {$cert->branch} akan mendekati masa surveillance atau renewal.")
                    ->icon('heroicon-o-exclamation-triangle')
                    ->sendToDatabase($user);
            }
        }

        $this->info('Notifikasi berhasil dikirim.');
    }
}
