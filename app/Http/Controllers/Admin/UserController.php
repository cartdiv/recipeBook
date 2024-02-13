<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;

class UserController extends Controller
{
    public function AllUser()
    {
        $users = User::Orderby('id', 'DESC')->where('role', 'user')->get();
        return view('admin.users.allusers', compact('users'));
        # code...
    }

    public function ActiveUser()
    {
        $users = User::Orderby('id', 'DESC')->where('role', 'user')->where('status', 'active')->get();
        return view('admin.users.activeusers', compact('users'));
        # code...
    }

    public function InactiveUser()
    {
        $users = User::Orderby('id', 'DESC')->where('role', 'user')->where('status', 'inactive')->get();
        return view('admin.users.inactiveusers', compact('users'));
        # code...
    }

    //
}
