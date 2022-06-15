<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index(){
        $viaggi = Trip::all();
        return view('home', compact('viaggi'));
    }
    public function show($id){
        $viaggio = Trip::findOrFail($id);
        return view('detail', compact('viaggio'));
    }
}
