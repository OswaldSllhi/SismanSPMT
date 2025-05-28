<?php

namespace App\Filament\Widgets;

use App\Models\Iso9001;
use App\Models\Iso14001;
use App\Models\Iso45001;
use App\Models\Iso37001;
use App\Models\ISPS;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Support\HtmlString;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $today = Carbon::today();

        $totalIsps = ISPS::count();
        $activeIsps = ISPS::where('expired_date', '>=', $today)->count();

        $certificationModels = [
            'ISO 9001' => Iso9001::class,
            'ISO 14001' => Iso14001::class,
            'ISO 45001' => Iso45001::class,
            'ISO 37001' => Iso37001::class,
            'ISPS' => ISPS::class,
        ];

        foreach ($certificationModels as $label => $model) {
            $active = $model::where('expired_date', '>=', $today)->get();
            $expired = $model::where('expired_date', '<', $today)->get();
            $total = $active->count() + $expired->count();

            $activeDropdown = '<details><summary><strong>Lihat Cabang Aktif</strong></summary><ul style="padding-left: 1rem; margin-top: 0.5rem;">';
            foreach ($active as $cert) {
                $activeDropdown .= "<li style='margin-bottom: 4px;'>🏢 <strong>{$cert->branch}</strong> — <small>Expired: {$cert->expired_date->format('d M Y')}</small></li>";
            }
            $activeDropdown .= '</ul></details>';

            $expiredDropdown = '<details><summary><strong>Lihat Cabang Expired</strong></summary><ul style="padding-left: 1rem; margin-top: 0.5rem;">';
            foreach ($expired as $cert) {
                $expiredDropdown .= "<li style='margin-bottom: 4px;'>🏢 <strong>{$cert->branch}</strong> — <small>Expired: {$cert->expired_date->format('d M Y')}</small></li>";
            }
            $expiredDropdown .= '</ul></details>';

            $stats[] = Stat::make("{$label} Aktif", $active->count())
                ->description(new HtmlString($activeDropdown))
                ->color('success');

            $stats[] = Stat::make("{$label} Expired", $expired->count())
                ->description(new HtmlString($expiredDropdown))
                ->color('danger');
        }

        return $stats;
    }
    
}
