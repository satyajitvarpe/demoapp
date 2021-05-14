<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class UserAuthController extends Controller
{
    function login()
    {
        return view('auth/login');
    }
    function register()
    {
        return view('auth/register');
    }
    function create(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',

        ]);
        // if form validation successful, then register new user
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = hash::make($request->password);
        $users->branch = $request->branch;
        $users->userrole = $request->RadioOptions;
        $query = $users->save();

        if ($query) {
            Session::flash('reg_suc', 'Registration Successful');
            return  redirect(url('login'));
        } else {
            return redirect()->back()->withInput($request->only('email', 'name'));
        }
    }

    function check(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        // if form validation successfully,the process login

        $users = User::where('email', '=', $request->email)->first();
        // dd($users);
        // dd($users['userrole']);
        if ($users) {
            if (hash::check($request->password, $users->password)) {
                // if the password match,then redirect to user profile
                Session::put('name', $users->name);
                Session::put('userrole', $users->userrole);

                if ($users['userrole'] == 'Teacher') {
                    return view('teacherdash');
                } else {
                    return view('studentdash');
                }


                // return redirect('profile');
            } else {
                Session::flash('passfail', 'Password Invalid');
                return  redirect('login');
            }
        } else {
            Session::flash('accuntfound', 'Accuount is not found register here!');
            return  redirect('register');
        }
    }
    function profile()
    {
        return view('admin.profile');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}















