<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OskarController extends Controller
{
       public function index()
    {
        $localort = DB::table('orteat')
                ->whereBetween('breitengrad', [47.5, 48.1])
                ->whereBetween('laengengrad', [16.5, 48.1])
                ->get(); 
                
        return view('welcome', ['localort' => $localort]);
    }
           public function index2()
    {
        $localort = DB::table('orteat')
                ->whereBetween('breitengrad', [47.5, 48.1])
                ->whereBetween('laengengrad', [15.5, 48.1])
                ->get(); 
                
        return view('welcome', ['localort' => $localort]);
    }
}
