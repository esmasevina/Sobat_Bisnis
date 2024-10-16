<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class adminAccountController extends Controller
{
   
    function login()
    {
        return view('login', [
            "title" => "Login",
        ]);
    }

    function register()
    {
        return view('register', [
            "title" => "Register",
        ]);
    }

    function save(Request $request)
    {
        
        //validate requests
        $request->validate([
            'name'=>'required|min:3|max:50',
            'username'=>'required|min:3|max:50|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:20'
        ]);

        //insert data to database
        $admin = new Admin;
        $admin->Name = $request->name;
        $admin->Username = $request->username;
        $admin->Email = $request->email;
        $admin->Password = Hash::make($request->password);
        $save =  $admin->save();

        if($save){
            return back()->with('success','Registration Successful!! Please Login');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required|min:5|max:20'
        ]);

        $Userinfo = Admin::where('Email','=', $request->email)->first();

        if(!$Userinfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $Userinfo->Password)){
                $request->session()->put('LoggedAdmin', $Userinfo->id);
                return redirect('/dashboard/index');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logoutAdmin(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/login');
        }
    }
}


    // function Save(Request $request)
    // { 
    //     $validatedData = $request->validate([
    //         'name'=>'required|min:3|max:50',
    //         'username'=>'required|min:3|max:50|unique:users',
    //         'email'=>'required|email:dns|unique:users',
    //         'password'=>'required|min:5|max:20',
    //     ]);

    //     $validatedData['password'] = Hash::make($validatedData['password']);
    //     User::create($validatedData);
    //     $request->session()->flash('success', 'Registration Successful!! Please Login');
    //     return redirect('/login');
       
    
    // }

    // function Validasiadmin(Request $request)
    // {
    //     $validasilogin = $request->validate([
    //         'username'=>'required',
    //         'password'=>'required',
    //     ]);
 
    //     if (Auth::attempt($validasilogin)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard');
    //     }
    //     return back()->with('failed','Login Failed!!!');
    // }

    
