<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function registerRoutes()
{
  $values = [
    'value1',
    'value2',
    'value3',
  ];

  foreach ($values as $value) {
    Route::get("/$value", function () use ($value) {
      return view('welcome', compact('value'));
    });
  }
}
}
