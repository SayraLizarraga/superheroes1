<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table_heros;

class table_herosController extends Controller
{
   public function index (){
    $page_title = "Super heroes";
    $superheros = table_heros::all();
    return view ('superheros', compact('page_title', 'superheros'));
   }

   public function index_w (){
    $page_title = "Super heroes women";
    $Women = table_heros::where('gender','=', 'Female')->get();
    return view ('superheroswo', compact('page_title', 'Women'));
   }

   public function index_m (){
    $page_title = "Super heroes Men";
    $Men = table_heros::where('gender','=', 'Male')->get();
    return view ('superherosmen', compact('page_title', 'Men'));
   }

}
