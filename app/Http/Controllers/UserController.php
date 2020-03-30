<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\More;
class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    public function update(User $user)
    {
        $user->update([
            'name' => request()->name,
            'email' => request()->email,
            'age' => request()->age,
        ]);  
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }

}
