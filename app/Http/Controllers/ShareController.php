<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('user.share', compact('user'));
    }
}
