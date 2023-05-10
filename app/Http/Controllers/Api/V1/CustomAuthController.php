<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\LoginUserRequest;

class CustomAuthController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        // \Log::info(json_encode($request->all()));
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->with('Error', 'Login credentials are invalid!');
        }

        // \Log::info(json_encode(array('Success' => 'Signed in!')));
        return redirect()->back()->with('Success', 'Successfully logged in!');
    }

    public function register(StoreUserRequest $request)
    {  
        // \Log::info(json_encode($request->all()));
        $data = $request->all();
        $user= $this->create($data);

        // Automatically login after creating user record
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
          
        // \Log::info(json_encode(array('Success' => 'Successfully registered!')));
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
