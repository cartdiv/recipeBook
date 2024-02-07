<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\Country;
use Auth;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.dashboard');
        # code...
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $userid = User::find($id);
        $countries = Country::all();
        return view('admin.profile.adminprofile', compact('userid', 'countries'));
        # code...
    }
    //
}
