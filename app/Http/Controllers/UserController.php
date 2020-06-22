<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;
use Session;
use Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(20);
        return view('admin.pages.users.index')->withUsers($users);
    }

    public function userIndex(){
        $user = Auth::user();
        return view('admin.pages.index')->withUser($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);
        $roles = Role::all();
        // dd($roles);
        return view('admin.pages.users.edit')->with('roles', $roles)->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'address' => 'required|min:5',
            'mobilephone' => 'required|integer',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobilephone = $request->mobilephone;
        $user->address = $request->address;
        $user->homephone = $request->homephone;
        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }
        $user->update();
        $roles = $request->roles;
        if (isset($roles)) {        
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
        }        
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }

        Session::flash('success', 'User has been updated successfully!');
        return redirect()->route('admin.users.index');
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'address' => 'required|min:5',
            'mobilephone' => 'required|integer',
        ]);
        $user = User::findOrFail(auth()->id());
        $user->name = $request->name;
        $user->mobilephone = $request->mobilephone;
        $user->address = $request->address;
        $user->homephone = $request->homephone;
        $user->update();

        Session::flash('success', 'Your profile has been updated successfully!');
        return redirect()->route('admin');
    }

    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        Session::flash('success', 'Password has been updated successfully!');
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userProperties($id){
        $user = User::findOrFail($id);

        $properties = Property::where('user_id', $user->id)->paginate(10);
        return view('admin.pages.users.properties')->withProperties($properties)->withUser($user);
    }
}
