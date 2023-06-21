<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\AddCrewRequest;
use App\Http\Requests\UpdateCrewRequest;
use App\Models\Crew;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index(): JsonResponse
    {
        $crews = Crew::paginate(10); // 10 items per page

        return response()->json([
            'data' => $crews->items(),
            'pagination' => [
                'total' => $crews->total(),
                'per_page' => $crews->perPage(),
                'current_page' => $crews->currentPage(),
                'last_page' => $crews->lastPage(),
                'from' => $crews->firstItem(),
                'to' => $crews->lastItem()
            ]
        ]);
    }

    public function store(AddCrewRequest $request) : JsonResponse
    {
        $validated=$request->validated();
        $crew = Crew::create($validated);
        return response()->json($crew, 201);
    }

    public function show($id) : JsonResponse
    {
        $crew = Crew::findOrFail($id);
        return response()->json($crew);
    }

    public function update(UpdateCrewRequest $request, $id) : JsonResponse
    {
        $crew = Crew::findOrFail($id);
        $crew->update($request->all());
        return response()->json($crew);
    }

    public function destroy($id) : JsonResponse
    {
        $crew = Crew::findOrFail($id);
        $crew->delete();
        return response()->json(null, 204);
    }
}
