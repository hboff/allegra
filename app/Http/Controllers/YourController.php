<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;




class YourController extends Controller
{
    public function registerRoutes()
{
  $values = [
    'datenschutzerklaerung',
    'welcome',
    'index',
  ];

  foreach ($values as $value) {
    Route::get("/$value", function () use ($value) {
      return view($value, compact('value'));
    });
  }
}
}




