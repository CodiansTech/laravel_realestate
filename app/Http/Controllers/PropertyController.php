<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;
use Session;

class PropertyController extends Controller
{
    
    public function adminIndex(){
        $user = factory(Property::class)->make();
        $properties = Property::orderBy('id', 'desc')->paginate(10);
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
        $property->zip = $request->zip;
        $property->long = $request->longitude;
        $property->lat = $request->latitude;
        $property->status = $request->status;
        $property->save();

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $img)
            {
                $date = Date('d-m-Y');
                $name = $date.'-'.$img->getClientOriginalName();

                $image = new Image();
                $image->filename= $name;
                $image->property_id = $property->id;
                $image->save();

                $img->move(public_path().'/images/property/', $name);  
            }
        }
        return redirect()->route('admin.properties.index');
    }

    public function edit($id){
        $property = Property::findOrFail($id);
        return view('admin.pages.properties.edit')->withProperty($property);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'price' => 'integer',
            'area' => 'integer',
            'rooms' => 'integer',
            'address' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'zip' => 'required|min:3|max:255',
        ]);

        // dd($request->latitude. ' - '. $request->longitude);
        $property = Property::findOrFail($id);
        $property->title = $request->title;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->area = $request->area;
        $property->rooms = $request->rooms;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->zip = $request->zip;
        $property->long = $request->longitude;
        $property->lat = $request->latitude;
        $property->status = $request->status;
        $property->update();

        Session::flash('success', 'Property udpated');
        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $img)
            {
                $date = Date('d-m-Y');
                $name = $date.'-'.$img->getClientOriginalName();

                $image = new Image();
                $image->filename= $name;
                $image->property_id = $property->id;
                $image->save();

                $img->move(public_path().'/images/property/', $name);  
            }
        }
        return redirect()->back();
    }

    public function show($id){
        $property = Property::findOrFail($id);
        return view('pages.properties.property_details')->withProperty($property);
    }
}
