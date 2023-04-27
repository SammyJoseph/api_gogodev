<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function index():JsonResponse
    {
        return response()->json(Note::all(), 200);
    }

    public function store(NoteRequest $request):JsonResponse // NoteRequest es mi validador que reemplaza a Request
    {
        $note = Note::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $note,
        ], 201);
    }

    public function show(string $id):JsonResponse
    {
        $note = Note::find($id);

        return response()->json($note, 200);
    }

    public function update(NoteRequest $request, string $id):JsonResponse
    {
        $note = Note::find($id);
        $note->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $note,
        ], 200);
    }

    public function destroy(string $id):JsonResponse
    {
        Note::find($id)->delete();        

        return response()->json([
            'success' => true,
        ], 200);
    }
}
