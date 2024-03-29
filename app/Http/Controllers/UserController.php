<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Http\Resources\EducationResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\TopicResource;
use App\Http\Resources\WorkResource;
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


    public function works($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            $works = $user->works->sortByDesc('start_date');
            return response()->json(new Response(WorkResource::collection($works), new Meta(200, "Ok")));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response(null, $meta), 404);
        }
    }

    public function educations($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            $educations = $user->educations->sortByDesc('start_date');
            return response()->json(new Response(EducationResource::collection($educations), new Meta(200, "Ok")));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response(null, $meta), 404);
        }
    }

    public function projects($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response(ProjectResource::collection($user->projects), new Meta(200, "Ok")));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response(null, $meta), 404);
        }
    }

    public function posts($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response(PostResource::collection($user->posts), new Meta(200, "Ok")));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response(null, $meta), 404);
        }
    }
}
