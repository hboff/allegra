<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;




class YourController extends Controller
{
    public function registerRoutes()
{
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
        foreach ($views as $view) {
            Route::view("/$view", "welcome");
        }
    });
} 
}
}





