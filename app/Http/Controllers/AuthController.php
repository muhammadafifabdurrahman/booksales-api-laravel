<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request) {
        //1. setup validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8'
        ]);

        //2. cek validator
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //3. create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) 
        ]);

        //4. cek keberhasilan
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user
            ], 201);
        }

        //5. cek kegagalan
        return response()->json([
            'success' => false,
            'message' => 'User created failed'  
        ],409); //409->conflict
    }

    public function login(Request $request) {
        //1. setjup validator
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //2. cek validator
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //3. get kredensial dari request yg dikirim oleh postman
        $credentials = $request->only('email', 'password');

        //4. cek IsFailed
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'email atau password anda salah'
            ], 401);
        }

        //5. cek IsSuccess
        return response()->json([
            'success' => true,
            'message' => 'Login successfully',
            'user' => auth()->guard('api')->user(),
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request) {
        //try
        //1. Invalidate token
        //2. cek isSuccessfully

        //catch
        //1. cek isFailed

        try {
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json([
                'success' => true,
                'message' => 'logout successfully'
            ], 200);
        } catch (JWTException $e) {
            return response() ->json([
                'success' => false,
                'message' => 'Logout Failed!'
            ], 500);
        }
    }

}
