<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function filter(Request $request)
     {
         $query = User::query();
     
         // Filter by name
         if ($request->filled('name')) {
             $query->where('name', 'like', '%' . $request->input('name') . '%');
         }
     
         $userFilter = $query->get();
         dd($userFilter);
     
         return view('admin.user.list-user', compact('userFilter'));
     }
     
     
    public function index()
    {

        $user = new User;

        $users = User::query()->orderBy('id', 'desc')->get();
        $roles = Role::all();
        return view('admin.user.list-user', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $roles = new Role;
        $roles = Role::all();

        return view('admin.user.add-user', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $validateUser = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('news', $imageName); // Store image in 'public/news' directory
           $user->image = 'news/' . $imagePath;

      
        }
        $validatedData['password'] = bcrypt($request->password);

        $user = User::query()->create($validateUser);

        return redirect()->route('list-user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('admin.user.update-user', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $user = User::find($id);
        $validateUser = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imageName = time(). '.'. $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('news', $imageName); // Store image in 'public/news' directory
            $user->image = 'news/'. $imagePath;
        }
        $user->update($validateUser);

        return redirect()->route('list-user')->with('success', "updae sucess");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $userImage = $user->image;
        if ($userImage != null) {
            Storage::delete($userImage);

        }
        $user->delete();
        return redirect()->route('list-user')->with('success', "delete successfully");
    }
}
