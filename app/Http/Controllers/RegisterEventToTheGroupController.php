<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Resources\EventResource;
use App\Models\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterEventToTheGroupController extends Controller
{
    public function __invoke(EventRequest $request, Group $group): JsonResponse
    {
        $event = $group->events()->updateOrCreate($request->validated());

        return response()->json([
            'data' => new EventResource($event),
            'message' => 'Evento criado com sucesso.'
        ], Response::HTTP_CREATED);
    }
}
