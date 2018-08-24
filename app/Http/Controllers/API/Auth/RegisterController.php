<?php

namespace App\Http\Controllers\API\Auth;

use App\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = $request->type;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->avatar = $request->avatar;
        $user->description = $request->description;

        $user->save();
    }
}
