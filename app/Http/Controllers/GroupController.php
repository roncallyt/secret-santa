<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class GroupController extends Controller
{
    public function index(): JsonResource
    {
        return GroupResource::collection(Group::all());
    }

    public function store(GroupRequest $request): JsonResponse
    {
        $group = Group::create($request->validated());

        return response()->json([
            'data' => new GroupResource($group),
            'message' => 'Grupo criado com sucesso.'
        ], Response::HTTP_CREATED);
    }

    public function show(Request $request, Group $group): JsonResponse
    {
        return response()->json([
            'data' => new GroupResource($group),
        ], Response::HTTP_FOUND);
    }

    public function update(GroupRequest $request, Group $group): JsonResponse
    {
        $group->update($request->validated());

        return response()->json([
            'data' => $group,
            'message' => 'Grupo atualizado com sucesso.'
        ], Response::HTTP_OK);
    }

    public function destroy(Request $request, Group $group): JsonResponse
    {
        $group->delete();

        return response()->json([
            'message' => 'Grupo excluído com sucesso.'
        ], Response::HTTP_OK);
    }
}
