<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

Route::get('/', function () {
    return redirect()->route('showroom');
});

// Showroom route
Route::get('/showroom', [ShowroomController::class, 'index'])->name('showroom');

// Contact route
Route::get('/contact', function () {
    $company = (object) [
        "name"    => "FutureDrive B.V.",
        "address" => "Elektronstraat 42, 1234 AB Amsterdam",
        "phone"   => "+31 20 123 4567",
        "email"   => "info@futuredrive.nl",
    ];
    return view('contact', ['company' => $company]);
})->name('contact');
