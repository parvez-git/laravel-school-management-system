<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleAssign extends Controller
{

    public function index()
    {
        $users = User::with('roles')->latest()->paginate(10);

        return view('backend.assignrole.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::latest()->get();
        
        return view('backend.assignrole.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8',
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        $user->assignRole($request->role);

        return redirect()->route('assignrole.index');
    }

    public function edit($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::latest()->get();
        
        return view('backend.assignrole.edit', compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email
        ]);

        $user->syncRoles($request->selectedrole);

        return redirect()->route('assignrole.index');
    }

    // NOT DONE
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // $user->removeRole('writer');
        // $user->syncRoles(['writer', 'admin']);

        // if ($user->delete()) {

        //     if($user->profile_picture != 'avatar.png') {

        //         $image_path = public_path() . '/images/profile/' . $user->profile_picture;

        //         if (is_file($image_path) && file_exists($image_path)) {

        //             unlink($image_path);
        //         }
        //     }
            
        // }

        return back();
    }
}
