<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function login(Request $request)
    {
        \Log::info(json_encode($request->all()));
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            \Log::info(json_encode(array('Success' => 'Signed in!')));
            return redirect()->back()->with('success', 'Signed in!');
        }

        \Log::info(json_encode(array('Error' => 'Login credentials are invalid!')));
        return redirect()->back()->with('Error', 'Login credentials are invalid!');
    }

    public function register(Request $request)
    {  
        \Log::info(json_encode($request->all()));
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);

        // Automatically login after creating user record
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
          
        \Log::info(json_encode(array('Success' => 'Successfully registered!')));
        return redirect()->back()->with('Success', 'Successfully registered!');
    }

    public function create(array $data)
    {
      return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    

    public function logout() { 
        Session::flush();
        Auth::logout();
   
        return redirect('/');
    }
}
