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

    public function create(){
        return view('admin.pages.properties.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'price' => 'integer',
            'area' => 'integer',
            'rooms' => 'integer',
            'address' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'neighborhood' => 'required|min:3|max:255',
            'zip' => 'required|min:3|max:255',
        ]);

        $property = new Property();
        $property->title = $request->title;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->area = $request->area;
        $property->rooms = $request->rooms;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->neighborhood = $request->neighborhood;
        $property->zip = $request->zip;
        $property->save();

        return redirect()->route('admin.properties.index');
    }
}
