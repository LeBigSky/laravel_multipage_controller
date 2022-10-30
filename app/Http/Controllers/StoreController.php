<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $dayz= array(
            [ 'day' => "Dimanche",
            'time' =>"Fermé"],
            ['day' => "Lundi", 
            'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Mardi",
            'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Mercredi",
            'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Jeudi",
            'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Vendredi",
            'time' =>"7:00 AM à 8:00 PM"],
            ['day' => "Samedi",
            'time' =>"9:00 AM à 5:00 PM" ]);
        $content=array([
            'add1' =>"1116 Orchard Street",
            'add2' =>"Golden Valley, Minnesota",
            'call' => "Call Anytime",
            'number' => "(317) 585-8468",
        ]);
        $content2= array(
            ['strong' => 'STRONG COFFEE, STRONG ROOTS','title1' => 'About Our Cafe', 'txt1' => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.", "txt2" => "We guarantee that you will fall in", 'img'=> "/img/about.jpg", 'txt3' => "lust", 'txt4' => "with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        );
        return view('/pages/store', compact('dayz', 'content', 'content2'));
    }
}
