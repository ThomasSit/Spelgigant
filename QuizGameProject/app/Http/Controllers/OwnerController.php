<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class OwnerController extends Controller
{
    public function index()
    {
        $users = User::where('role' , '=', 'user' )->get();

        return view('dashboard.owner', [
            'users' => $users
        ]);
    }
    
    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('users.show', ['users' => $users]);
    }

    public function edit($id)
    {
        $users = user::findOrFail($id);

        return view('users.edit', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $users = user::findOrFail($id);

        $users->name = $request->name;
        $users->email = $request->email;

        $users->save();

        return redirect()->route('users.show', ['users' => $users, 'id' => $id]);
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('dashboard/owner');
    }
    
    
}
