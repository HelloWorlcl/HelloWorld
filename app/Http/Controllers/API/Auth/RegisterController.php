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
    public function userRegister(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
    }

    public function clientRegister(StoreClientRequest $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->avatar = $request->avatar;
        $client->description = $request->description;

        $client->save();
    }
}
