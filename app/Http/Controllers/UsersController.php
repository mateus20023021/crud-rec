<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->pwd,
        ]);

        return "Operação realizada com sucesso!";
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view(
            'users.show',
            ['user' => $user]
        );
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view(
            'users.edit',
            ['user' => $user]
        );
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->pwd,
        ]);

        return "Operação realizada com sucesso!";
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        return view(
            'users.delete',
            ['user' => $user]
        );
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return "Operação realizada com sucesso!";
    }
}
