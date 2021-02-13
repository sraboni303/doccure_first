<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     *  Change Password
     */
    public function password(Request $request){
        $this-> validate($request, [
            'old_password' => 'required',
            'password' => 'required | min:3 | max:30 | confirmed'
        ]);

        $old_password = Auth::user()->password;

        if(password_verify($request -> old_password, $old_password )){

            $update = User::find( Auth::user()->id );

            $update -> password = password_hash($request->password, PASSWORD_DEFAULT);
            $update -> update();
            Auth::logout();

            return redirect('/login');

        }else{

            return redirect() -> back() -> with('notice', 'Wrong Password !!');

        }

    }





    /**
    *  Update Profile
    */
    public function update(Request $request){

        // Photo Update
        // if($request->hasFile('new_photo')){

        //     $new_file = $request -> file('new_photo');
        //     $new_photo = md5( time().rand() ) . '.'. $new_file -> getClientOriginalExtension();
        //     $new_file -> move(public_path('admin/media/admin'), $new_photo);

        //     if( file_exists('admin/media/admin/' . $request -> photo) ){
        //         unlink('admin/media/admin/', $request -> photo);
        //     }

        // }else{
        //     $new_photo = $request -> photo;
        // }

        $admin = User::find(Auth::user()->id);

        $admin-> name = $request -> name;
        $admin-> email = $request -> email;
        $admin-> mobile = $request -> mobile;
        $admin-> dob = $request -> dob;
        $admin-> address = $request -> address;
        // $admin-> photo = $new_photo;

        $admin-> update();
        return redirect('/profile');

    }

























}
