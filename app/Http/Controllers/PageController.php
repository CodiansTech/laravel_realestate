<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
class PageController extends Controller
{

    public function index(){
        $properties = Property::orderBy('id', 'desc')->take(8)->get();
        $pricedrop = Property::inRandomOrder()->take(4)->get();
        return view('pages.index')->withProperties($properties)->with('pricedrop', $pricedrop);

    }
    public function contact(){
        return view('pages.contact.index');
    }
}
