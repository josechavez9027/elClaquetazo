<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return response()->json($movie);
    }

    public function store(Request $request)
    {
        $movie = Movie::create([
            'title'    => $request->title,
            'synopsis' => $request->synopsis,
            'year'     => $request->year,
            'cover'    => $request->cover,
        ]);
        return response()->json($movie);
    }

        public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        $movie->update([
            'title'    => $request->title    ?? $movie->title,
            'synopsis' => $request->synopsis ?? $movie->synopsis,
            'year'     => $request->year     ?? $movie->year,
            'cover'    => $request->cover    ?? $movie->cover,
        ]);

        return response()->json($movie);
    }

        public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        $movie->delete();

        return response()->json(['message' => 'Película eliminada correctamente']);
    }
}
