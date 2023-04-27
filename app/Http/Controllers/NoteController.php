<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();

        return response()->json($notes, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request) // NoteRequest es mi validador que reemplaza a Request
    {
        Note::create($request->all());

        return response()->json([
            'success' => true,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::find($id);

        return response()->json($note, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, string $id)
    {
        $note = Note::find($id);
        $note->update($request->all());

        return response()->json([
            'success' => true,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Note::find($id)->delete();        

        return response()->json([
            'success' => true,
        ], 200);
    }
}
