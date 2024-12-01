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

/**
 * @OA\Info(
 *             title="API My Portfolio",
 *             version="1.0",
 *             description="Se usa para el consumo del frontend de mi portafolio new"
 * )
 *
 * @OA\Server(url="http://myportfolioapi.test")
 */
class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/users",
     *     summary="Obtiene todos los usuarios",
     *     tags={"Users"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/User")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        try {
            $meta = new Meta();
            $meta->code = 200;
            $meta->message = "OK";
            $meta->messageSpanish = "OK";
            return response()->json(new Response(User::get(), $meta));
        } catch (\Throwable $th) {
            return response()->json($meta, 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/{user}",
     *     summary="Obtiene los detalles de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Usuario encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 ref="#/components/schemas/User"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Usuario no encontrado",
     *                 example="null"
     *             )
     *         )
     *     )
     * )
     */
    public function show($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            $meta = new Meta();
            $meta->code = 200;
            $meta->message = "OK";
            $meta->messageSpanish = "OK";
            return response()->json(new Response($user, $meta));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/{user}/services",
     *     summary="Obtiene los servicios que ofrece un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Servicios del usuario obtenidos correctamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/Service")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Usuario no encontrado",
     *                 example="null"
     *             )
     *         )
     *     )
     * )
     */
    public function services($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response($user->services()->where('active', true)->get(), null));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/{user}/social-medias",
     *     summary="Obtiene las redes sociales de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Redes sociales del usuario obtenidas correctamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/SocialMediaEntry")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Usuario no encontrado",
     *                 example="null"
     *             )
     *         )
     *     )
     * )
     */
    public function socialMedias($user)
    {
        if (is_numeric($user)) {
            $user = User::where('id', $user)->first();
        } elseif (is_string($user)) {
            $user = User::where('user_name', $user)->first();
        }
        if ($user) {
            return response()->json(new Response($user->social_medias()->where('is_principal', true), null));
        } else {
            $meta = new Meta();
            $meta->code = 404;
            $meta->message = "User not found";
            $meta->messageSpanish = "usuario no encontrado";

            return response()->json(new Response($user, $meta), 404);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/user/{user}/professions",
     *     summary="Obtiene las profesiones de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/ProfessionUser")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */

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
    /**
     * @OA\Get(
     *     path="/api/user/{user}/clients",
     *     summary="Obtiene todos los clientes de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/ClientInfo")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */
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
    /**
     * @OA\Get(
     *     path="/api/user/{user}/skills",
     *     summary="Obtiene las habilidades de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/TopicResource")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */

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

    /**
     * @OA\Get(
     *     path="/api/user/{user}/works",
     *     summary="Obtiene todas las experiencias laborales de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         description="ID o nombre de usuario del usuario",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/WorkResource")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */

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

    /**
     * @OA\Get(
     *     path="/api/user/{user}/educations",
     *     summary="Obtiene la educación de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/EducationResource")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */

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

    /**
     * @OA\Get(
     *     path="/api/user/{user}/projects",
     *     summary="Obtiene todos los proyectos de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         description="ID o nombre de usuario del usuario",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/ProjectResource")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */

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

    /**
     * @OA\Get(
     *     path="/api/user/{user}/posts",
     *     summary="Obtiene las publicaciones de un usuario",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="user",
     *         in="path",
     *         required=true,
     *         description="ID o nombre de usuario del usuario",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/PostResource")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="meta",
     *                 ref="#/components/schemas/Meta"
     *             )
     *         )
     *     )
     * )
     */

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
