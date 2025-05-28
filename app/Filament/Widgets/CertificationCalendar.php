<?php

namespace App\Filament\Widgets;

use App\Models\Iso9001;
use App\Models\Iso14001;
use App\Models\Iso37001;
use App\Models\Iso45001;
use App\Models\ISPS;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CertificationCalendar extends FullCalendarWidget
{
    public function fetchEvents(array $fetchInfo): array
    {
        $models = [
            Iso9001::class,
            Iso14001::class,
            Iso37001::class,
            Iso45001::class,
            ISPS::class,
        ];

        $events = [];

        foreach ($models as $model) {
            $certificates = $model::query()
                ->where(function ($query) use ($fetchInfo) {
                    $query->whereBetween('expired_date', [$fetchInfo['start'], $fetchInfo['end']])
                        ->orWhereBetween('surveillance_1_plan', [$fetchInfo['start'], $fetchInfo['end']])
                        ->orWhereBetween('surveillance_2_plan', [$fetchInfo['start'], $fetchInfo['end']])
                        ->orWhereBetween('start_date', [$fetchInfo['start'], $fetchInfo['end']]);
                })
                ->get();

            foreach ($certificates as $cert) {
                $title = "{$cert->certification_type}  {$cert->branch}";

                if ($cert->start_date) {
                    $events[] = [
                        'title' => "$title",
                        'start' => $cert->start_date->toDateString(),
                        'backgroundColor' => '#00d443', // biru untuk start
                        'allDay' => true,
                    ];
                }

                if ($cert->surveillance_1_plan) {
                    $events[] = [
                        'title' => "$title",
                        'start' => $cert->surveillance_1_plan->toDateString(),
                        'backgroundColor' => '#e6ad02',
                        'allDay' => true,
                    ];
                }

                if ($cert->surveillance_2_plan) {
                    $events[] = [
                        'title' => "$title",
                        'start' => $cert->surveillance_2_plan->toDateString(),
                        'backgroundColor' => '#f76700',
                        'allDay' => true,
                    ];
                }

                if ($cert->expired_date) {
                    $events[] = [
                        'title' => "Expired $title",
                        'start' => $cert->expired_date->toDateString(),
                        'backgroundColor' => '#f71d00',
                        'allDay' => true,
                    ];
                }
            }
        }

        return $events;
    }

    public function getCalendarOptions(): array
    {
        return [
            'eventDidMount' => <<<JS
                function(info) {
                    info.el.style.fontSize = '8px';
                    info.el.style.whiteSpace = 'normal';
                    info.el.style.padding = '2px';
                }
            JS,
        ];
    }
}
