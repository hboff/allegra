<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



class YourController extends Controller
{
public function registerRoutes()
  {
    $outerValues = [
      'immobilienbewertung-duisburg.com',
      'immobilienbewertung-bochum.com',
    ];

$innerValues = [
'datenschutzerklaerung',
'welcome',
'index',
];

foreach ($outerValues as $outerValue) {
    Route::group(['domain' => $outerValue], function () use ($outerValue, $innerValues) { 

  foreach ($innerValues as $innerValue) {
    Route::get("/$innerValue", function () use ($outerValue, $innerValue) {
      return view($innerValue, compact('outerValue', 'innerValue'));
    });       
  }
}); 
}
}
}


