<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @param StoreUserRequest $request
     *
     * @return array
     */
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

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer())
            ->toArray();
    }
}
