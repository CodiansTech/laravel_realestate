<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;


class PropertyController extends Controller
{
    public function adminIndex(){
        $properties = Property::paginate(10);
        return view('admin.pages.properties.index')->withProperties($properties);
    }
}
