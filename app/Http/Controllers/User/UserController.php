<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Dashboard()
    {
        return view('user.dashboard');
        # code...
    }

    public function UserProfile()
    {
        $id = Auth::user()->id;
        $userid = User::find($id);
        $countries = Country::all();
        return view('user.profile.userprofile', compact('userid', 'countries'));
        # code...
    }

    public function UpdateUserProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->country = $request->country;
        if($request->file('photo')){
            $file = $request->file('photo');
            
            @unlink(public_path('upload/user_image/'.$data->photo));

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $data['photo'] = $filename;
           }
           $data->save();
    
           $nottification = array(
                'message' => "User Profile Updated Successfully 🤗",
                'alert-type' => 'success'
           );
    
           return redirect()->route('user.profile')->with($nottification);
        # code...
    }

    public function UserChangePassword()
    {
        $id = Auth::user()->id;
        $userid = User::find($id);
        return view('user.profile.change_password', compact('userid'));
        # code...
    }

    public function UpdateUserPassword(Request $request)
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
            return redirect()->route('user.change.password')->with($nottification);
        }
        # code...
    }

    public function UserLogout(Request $request)
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
