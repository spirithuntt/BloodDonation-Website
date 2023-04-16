<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('users.index', compact('users', 'roles'));

    }
    public function edit(string $id)
    {
        return response()->json([
            'user' => User::find($id),
            'role' => User::find($id)->roles->first()->name
        ]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $role = Role::findByName($request->role);
        $user->removeRole($user->roles->first()->name);
        $user->assignRole($request->role);
        $user->update($request->all());
        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}