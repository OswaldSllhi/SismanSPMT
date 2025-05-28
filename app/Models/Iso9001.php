<?php

namespace App\Models;

use App\Observers\Iso9001Observer;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

// #[ObservedBy(Iso9001Observer::class)]
class Iso9001 extends Model
{
    protected $fillable = [
        'certification_type',
        'branch',
        'no_certification',
        'start_date',
        'expired_date',
        'pdf_path',
        'surveillance_1_plan',
        'surveillance_2_plan',
        'renewal_plan',
    ];

    protected $casts = [
    'start_date' => 'date',
    'expired_date' => 'date',
    'surveillance_1_plan' => 'date',
    'surveillance_2_plan' => 'date',
    'renewal_plan' => 'date',
    ];
}
