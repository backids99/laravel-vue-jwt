<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Login user and return a token
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            return response()->json([
                'success' => true,
                'token' => $token
            ], 200)->header('Authorization', $token);
        }

        return response()->json([
            'success' => false,
            'message' => 'login fail'
        ], 401);
    }
    /**
     * Logout User
     */
    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            'success' => true,
            'message' => 'Logged out Successfully.'
        ], 200);
    }
    /**
     * Get authenticated user
     */
    public function user(Request $request)
    {
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);

            return response()->json([
                'success' => true,
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Unauthorized'
            ]);
        }
        
    }
    /**
     * Refresh JWT token
     */
    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['success' => true], 200)
                ->header('Authorization', $token);
        }

        return response()->json([
            'success' => false,
            'message' => 'Error refresh token'
        ], 401);
    }
    /**
     * Return auth guard
     */
    private function guard()
    {
        return Auth::guard();
    }
}