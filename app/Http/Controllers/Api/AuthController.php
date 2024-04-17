<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request){

        // get information user
        // $credentials = $request->only([
        //     'email',
        //     'password',
        //     'device_name',
        // ]);

        $user = User::where('email', $request->email)->first();

        if(! $user || ! Hash::check($request->password,$user->password)){
            throw ValidationException::withMessages([
                'email' => ['the provided credentiasl are incorrect']
            ]);
        }

        //deslogando o user de outros dispositivos> dessa forma temos o login unico. Isso é opcional
        $user->tokens()->delete();

        $token = $user->createToken($request->device_name)->plainTextToken;

        Auth::login($user);
      

        return response()->json([
            'token' => $token,
        ]);

   
    }
}
