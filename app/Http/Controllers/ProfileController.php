<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::latest()->paginate(20);

        return view('admin.userindex', compact('users'));
        
    }
    public function create()
    {
        return view('admin.usercreate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => $request->usertype,
            'password' => bcrypt($request->password),
            'description' => $request->description,
        ]);

        Session::flash('success', 'User created successfully');
        return redirect()->back();
    }

    public function edit(User $user)
    {
        return view('admin.useredit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',
            'image' => 'sometimes|nullable|image|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->description = $request->description;
        if ($request->has('password') && $request->password !== null) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/profile/', $image_new_name);
            $user->image = '/storage/profile/' . $image_new_name;
        }
        $user->save();

        Session::flash('success', 'User profile updated successfully');
        return redirect()->back();
    }

    public function destroy(User $user)
    {
        if ($user) {
            $user->delete();
            Session::flash('success', 'User deleted successfully');
        }
        return redirect()->back();
    }
    public function show()
    {
        $user = auth()->user();
        return view('admin.updateprofile');

        
    }

    
}
