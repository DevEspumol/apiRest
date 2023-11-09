<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        $this->validateLogin($request);

        if(Auth::attempt($request->only('email','password'))){
            $name = $request->input('name', 'default_token_name');
            return response()->json([
                'token'=>$request->user()->createToken($name)->plainTextToken,
                'message'=>'Exitosa'
            ]);
        }
        return response()->json([
            'message'=>'Inexistente'
        ],401);
    }

    public function validateLogin(Request $request){
        return $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
    }

    public function registrerNewUser(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);
         // Crear el nuevo usuario

         $data['password'] = Hash::make($data['password']);
         $user = User::create($data);

         return response()->json([
             'user' => $user,
             'message' => 'exito'
         ], 201);

    }
}
