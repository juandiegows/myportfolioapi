<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Http\Resources\TopicResource;
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
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    public function services($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response($user->services, null));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    public function socialMedias($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response($user->social_medias, null));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    public function professions($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response($user->professions, null));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    public function clients($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response(ClientResource::collection($user->clients), new Meta(200, "Ok")));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response(null, $meta), 404);
        }
    }

    public function skills($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response(TopicResource::collection($user->skills), new Meta(200, "Ok")));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response(null, $meta), 404);
        }
    }
}
