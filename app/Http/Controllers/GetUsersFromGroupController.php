<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetUsersFromGroupController extends Controller
{
    public function __invoke(Request $request, Group $group): JsonResource
    {
        return UserResource::collection($group->users);
    }
}
