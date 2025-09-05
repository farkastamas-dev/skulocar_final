<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function muhely()
    {
        return view('pages.workshop');
    }
    public function szakszerviz()
    {
        return view('pages.specialist-service');
    }
    public function hanggenerator()
    {
        return view('pages.sound-generator');
    }
    public function workshop_reference()
    {
        return view('pages.workshop-reference');
    }
    public function carcosmetics_reference()
    {
        return view('pages.carcosmetics-reference');
    }
    // public function autokozmetika-ref()
    // {
    //     return view('pages.autokozmetika.referencia');
    // }
    public function price_offer()
    {
        return view('pages.price_offer');
    }
    public function carpart()
    {
        return view('pages.carpart');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
