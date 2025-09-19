<?php

use Illuminate\Support\Facades\Route;

$offertes = [
    'of12872' => [
        'offertenummer' => 'of12872',
        'klant' => 'Van Meer Solutions',
        'bedrag' => 1500.50
    ],
    'of10632' => [
        'offertenummer' => 'of10632',
        'klant' => 'Groene vingers',
        'bedrag' => 1200.00
    ],
    'of28003' => [
        'offertenummer' => 'of28003',
        'klant' => "Mario's pizza",
        'bedrag' => 2500.75
    ],
    'of10891' => [
        'offertenummer' => 'of10891',
        'klant' => 'Blauwwater Consulting',
        'bedrag' => 1750.00
    ]
]; 
    
      
Route::get('/', function () use ($offertes) {
    return view('invoices', ['offertes' => $offertes]);
});

Route::get('/offertes/{id}', function ($id) use ($offertes) {
    if (!array_key_exists($id, $offertes)) {
        abort(404, "Offerte niet gevonden");
    }
    $offerte = $offertes[$id];
    return view('invoice_detail', ['offerte' => $offerte]);
});
