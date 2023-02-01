<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OskarController;

// Define the domains
$domains = [
    'immobilienbewertung-bochum.com',
    'immobilienbewertung-duisburg.com',
];

// Define the views
$views = [
    'datenschutzerklaerung',
    'welcome',
    'index',
];

// Loop for handling routes
foreach ($domains as $domain) {
    Route::group(['domain' => $domain], function() use ($views) {
        Route::get('/', 'Controller@index');
        foreach ($views as $view) {
            Route::view("/$view", "$view");
        }
    });
}

