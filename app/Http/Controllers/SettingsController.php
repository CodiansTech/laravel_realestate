<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
    public function index(){
        $settings = Setting::all();
        return view('admin.pages.settings.index')->withSettings($settings);
    }

    public function update(Request $request){
         $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        
        $email = Setting::where('name', 'email')->first();
        $address = Setting::where('name', 'address')->first();
        $phone = Setting::where('name', 'phone')->first();
        
        $email->value = $request->email;
        $address->value = $request->address;
        $phone->value = $request->phone;

        $email->update();
        $phone->update();
        $address->update();
        
        return redirect()->back();
    }
}
