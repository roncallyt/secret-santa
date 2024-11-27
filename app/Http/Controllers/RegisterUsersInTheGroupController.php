<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterUsersInTheGroupController extends Controller
{
    public function __invoke(UserRequest $request, Group $group): JsonResponse
    {
        $user = $group->users()->updateOrCreate($request->validated());

        return response()->json([
            'data' => new UserResource($user),
            'message' => 'Usuário criado com sucesso.'
        ], Response::HTTP_CREATED);
    }
}
