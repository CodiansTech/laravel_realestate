<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\PropertyType;
use App\Image;
use Auth;
use Session;

class PropertyController extends Controller
{
    
    public function adminIndex(){

        $properties = Property::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.properties.index')->withProperties($properties);
    }

    public function myproperties(){
        $auth = Auth::user();

        $properties = Property::where('user_id', $auth->id)->orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.properties.myproperties')->withProperties($properties);
    }

    public function listProperties(){
        $properties = Property::orderBy('id', 'desc')->paginate(15);
        return view('pages.properties.grid_listing')->withProperties($properties);
    }

    public function create(){
        $types = PropertyType::orderBy('name', 'asc')->get();
        return view('admin.pages.properties.create')->with('types', $types);
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
            // 'filename'=>'required|mimes:jpeg,png,jpg'
        ]);

    
        if($request->longitude == null){
            Session::flash('error', 'Please select a location on the map!');
            return redirect()->back();
        }
        $user = Auth::user();
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
        $property->propertytype_id = $request->type;
        $property->lat = $request->latitude;
        $property->status = $request->status;
        $property->user_id = $user->id;
        if($user->isAdmin() || $user->isAgent()){
            $property->approved = true;
        }
        else{
            $property->approved = false;
        }
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
                $image->type = 'gallery';
                $image->save();

                $img->move(public_path().'/storage/app/property/', $name);  
            }
        }

        if($request->hasfile('floorplan'))
        {
            foreach($request->file('floorplan') as $img)
            {
                $date = Date('d-m-Y');
                $name = $date.'-'.$img->getClientOriginalName();

                $image = new Image();
                $image->filename= $name;
                $image->property_id = $property->id;
                $image->type = 'floorplan';
                $image->save();

                $img->move(public_path().'/storage/app/property/', $name);  
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
            'long' => 'required'
        ]);
        $validator->after(function ($validator) {
            if($this->somethingElseIsInvalid()) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });

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
        $user = Auth::user();
        return view('pages.properties.property_details')->withProperty($property)->withUser($user);
    }

    public function approveproperties(){
        $properties = Property::where('approved', false)->orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.properties.approved')->withProperties($properties);
    }

    public function approveproperty($id){
        $property = Property::findOrFail($id);
        $property->approved = true;
        $property->update();

        return redirect()->back();
    }

    public function editImages($id){
        $property = Property::findOrFail($id);
        return view('admin.pages.properties.editimages')->withProperty($property);
    }
    

    public function setFeaturedImage($imageid){
        $image = Image::findOrFail($imageid);
        $property = Property::findOrFail($image->property->id);

        $property->featuredimage = $image->id;
        $property->update();


        return redirect()->route('admin.properties.editimages', $property->id);
    }

    public function bookmarkProperty($id){
        $property = Property::findOrFail($id);
        $user = Auth::user();
        
        if(!$property->users->contains($user->id))
            $property->users()->attach($user);
        else
            $property->users()->detach($user);
        
        
        return redirect()->back();
    }

    public function bookmarkedProperties(){
        $user = Auth::user();
        $properties = $user->bookmarks()->paginate(10);
        
        return view('admin.pages.properties.bookmarked')->withUser($user)->withProperties($properties);
    }


}
