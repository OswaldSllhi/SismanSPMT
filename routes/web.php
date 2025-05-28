<?php

use Illuminate\Support\Facades\Route;
use App\Models\ISPS;
use App\Models\Iso9001;
use App\Models\Iso14001;
use App\Models\Iso37001;
use App\Models\Iso45001;
use Illuminate\Support\Carbon;

Route::get('/index', function () {
    $today = Carbon::today();

    // ISPS
    $totalIsps = ISPS::count();
    $activeIsps = ISPS::where('expired_date', '>=', $today)->count();
    $ispsCertificates = ISPS::select('no_certification', 'start_date', 'expired_date', 'pdf_path', 'branch')->get();

    // ISO 9001
    $totalIso9001 = Iso9001::count();
    $activeIso9001 = Iso9001::where('expired_date', '>=', $today)->count();
    $iso9001Certificates = Iso9001::select('no_certification', 'start_date', 'expired_date', 'branch')->get();

    // ISO 14001
    $totalIso14001 = Iso14001::count();
    $activeIso14001 = Iso14001::where('expired_date', '>=', $today)->count();
    $iso14001Certificates = Iso14001::select('no_certification', 'start_date', 'expired_date', 'branch')->get();

    // ISO 37001
    $totalIso37001 = Iso37001::count();
    $activeIso37001 = Iso37001::where('expired_date', '>=', $today)->count();
    $iso37001Certificates = Iso37001::select('no_certification', 'start_date', 'expired_date', 'branch')->get();

    // ISO 45001
    $totalIso45001 = Iso45001::count();
    $activeIso45001 = Iso45001::where('expired_date', '>=', $today)->count();
    $iso45001Certificates = Iso45001::select('no_certification', 'start_date', 'expired_date', 'branch')->get();

    return view('index', compact(
        'totalIsps',
        'activeIsps',
        'ispsCertificates',

        'totalIso9001',
        'activeIso9001',
        'iso9001Certificates',

        'totalIso14001',
        'activeIso14001',
        'iso14001Certificates',

        'totalIso37001',
        'activeIso37001',
        'iso37001Certificates',

        'totalIso45001',
        'activeIso45001',
        'iso45001Certificates',
    ));
});


Route::get('/', function () {
    return view('index');
});



