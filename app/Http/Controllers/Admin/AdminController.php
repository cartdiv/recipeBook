<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\Country;
use Auth;
use Illuminate\Support\Facades\Hash;

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

    public function UpdateAdminProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->country = $request->country;
        if($request->file('photo')){
            $file = $request->file('photo');
            
            @unlink(public_path('upload/admin_image/'.$data->photo));

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo'] = $filename;
           }
           $data->save();
    
           $nottification = array(
                'message' => "Admin Profile Updated Successfully 🤗",
                'alert-type' => 'success'
           );
    
           return redirect()->route('admin.profile')->with($nottification);
        # code...
    }

    public function AdminChangePassword()
    {
        return view('admin.profile.change_password');
        # code...
    }

    public function UpdateAdminPassword(Request $request)
    {
        $validate = $request->validate([
            'current_password'=>'required',
            'new_password'=>'required',
            'confirm_password'=>'required|same:new_password'
        ],[
            'current_password.required'=>'Input Current Password 😞',
            'new_password.required'=>'Input New Password 😞',
            'confirm_password.required'=>'Confirm Your Password 😞',
            'confirm_password.same'=>'Your Confirm Password Does not Match 🤔'
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password,$hashedPassword)){
            $users = user::find(Auth::id());
            $users->password = bcrypt($request->new_password);
            $users->save();
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            

            $nottification = array(
                'message' => 'Password updated Successfully 🤗',
                'alert-type' => 'success',
            );
            return redirect()->route('login')->with($nottification);
        }else{
            $nottification = array(
                'message' => 'Check your Current Password 😞',
                'alert-type' => 'error',
            );
            return redirect()->route('admin.change.password')->with($nottification);
        }
        # code...
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $nottification = array(
            'message' => 'Log out Successful 🤗',
            'alert-type' => 'success',
        );
        return redirect('/')->with($nottification);
        # code...
    }
    //
}
