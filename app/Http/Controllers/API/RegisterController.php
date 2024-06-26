<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'phone' => 'required|max:15',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|con firmed'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'role_id' => 2,
            'type_id' => 1,
            'user_name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'user_phone' => $request->phone,
            'user_slug' => $request->name
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'user'    => $user,
            ], 201);
        }

        return response()->json([
            'success' => false,
        ], 409);
    }
}
