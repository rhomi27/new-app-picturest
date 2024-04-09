<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function signUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'unique:users|required|max:25',
            'email' => 'email:filter|unique:users',
            'password' => 'required|min:8',
        ], [
            'name.unique' => 'The name already exists',
            'email.unique' => 'The name already exists',
            'email.email' => 'Invalid email format',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => $validator->errors(),
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            Auth::login($user);
            return response()->json([
                'status' => 200,
                'message' => 'registration successful',
            ]);
        }
    }

    public function signIn(Request $request)
    {
            if (
                Auth::attempt([
                    'email' => $request->email,
                    'password' => $request->password,
                ])
            ) {
                $request->session()->regenerate();
                return response()->json([
                    'status'=> 200,
                    'message'=> 'Sign In successful',
                ]);
            } else {
                return response()->json([
                    'status'=> 500,
                    'message'=> 'Email and password do not match',
                ]);
            }

    }

    public function signOut(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
