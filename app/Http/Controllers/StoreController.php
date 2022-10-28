<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $dayz= array(
            [ 'day' => "Dimanche",'time' =>"Fermé"],
            ['day' => "Lundi", 'time' =>"7:00 AM à 8:00 PM"],['day' => "Mardi",'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Mercredi",'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Jeudi",'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Vendredi",'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Samedi",'time' =>"9:00 AM à 5:00 PM" ]);
        return view('/pages/store', compact('dayz'));
    }
}
