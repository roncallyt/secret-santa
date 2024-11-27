<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetEventsFromGroupController extends Controller
{
    public function __invoke(Request $request, Group $group): JsonResource
    {
        return EventResource::collection($group->events);
    }
}
