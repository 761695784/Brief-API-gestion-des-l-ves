<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    // Register API - POST (name, email, password)
    // public function register(Request $request){

    //     // Validation
    //     $request->validate([
    //         "name" => "required|string",
    //         "email" => "required|string|email|unique:users",
    //         "password" => "required|confirmed" // password_confirmation
    //     ]);

    //     // User model to save user in database
    //     User::create([
    //         "name" => $request->name,
    //         "email" => $request->email,
    //         "password" => bcrypt($request->password)
    //     ]);

    //     return response()->json([
    //         "status" => true,
    //         "message" => "User registered successfully",
    //         //"data" => []
    //     ]);
    // }

    // Login API - POST (email, password)
    public function login(Request $request){

        // Validation
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $token = auth()->attempt([
            "email" => $request->email,
            "password" => $request->password
        ]);

        if(!$token){

            return response()->json([
                "status" => false,
                "message" => "Vos données sont invalides"
            ]);
        }

        return response()->json([
            "status" => true,
            "message" => "Utilisateur connecté avec succès",
            "token" => $token,
            'user'=> auth()->user(),
            'expires_in' => env("JWT_TTL") * 60 . "seconds"        ]);

    }

    // Profile API - GET (JWT Auth Token)
    // public function profile(){

    //     //$userData = auth()->user();
    //     $userData = request()->user();

    //     return response()->json([
    //         "status" => true,
    //         "message" => "Profile data",
    //         "data" => $userData,
    //         //"user_id" => request()->user()->id,
    //         //"email" => request()->user()->email
    //     ]);
    // }

    // Refresh Token API - GET (JWT Auth Token)
    public function refreshToken(){

        $token = auth()->refresh();

        return response()->json([
            "status" => true,
            "message" => "New access token",
            "token" => $token,
            'user'=> auth()->user(),
            'expires_in' => env("JWT_TTL") * 60 . "seconds"]);
    }

    // Logout API - GET (JWT Auth Token)
    public function logout(){

        auth()->logout();

        return response()->json([
            "status" => true,
            "message" => "Utilisateur deconnecté avec succès"
        ]);
    }
}
