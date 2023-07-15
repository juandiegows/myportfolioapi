<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Response;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::get());
    }
    public function show($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response($user, null));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->message_spanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }
}
