<?php

namespace App\Http\Controllers;


use App\Models\Ort;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteController extends Controller
{
    // Show single lisitng
   // public function show($ort) {
   //     $status='de';
   //     return view('show.bausachverstaendiger', compact('status'), [
   //         'ortsname'=> $ort,
   //         ]);    }          
    
    public function index() {
        $status='de';
        return view ('index', compact('status'));
    }
    public function ertragswertverfahren() {
        $status='de';
        return view ('show.ertragswertverfahren', compact('status'));
    }
    public function sachwertverfahren() {
        $status='de';
        return view ('show.sachwertverfahren', compact('status'));
    }
    public function verkehrswertverfahren() {
        $status='de';
        return view ('show.verkehrswertverfahren', compact('status'));
    }
    public function gewerbeimmobilien() {
        $status='de';
        return view ('show.gewerbeimmobilien', compact('status'));
    }
    public function grundstuecke() {
        $status='de';
        return view ('show.grundstuecke-und-rechte', compact('status'));
    }
    public function landwirtschaftliche() {
        $status='de';
        return view ('show.landwirtschaftliche-immobilien', compact('status'));
    }
    public function sonderimmobilien() {
        $status='de';
        return view ('show.sonderimmobilien', compact('status'));
    }
    public function wohnimmobilien() {
        $status='de';
        return view ('show.wohnimmobilien', compact('status'));
    }
}