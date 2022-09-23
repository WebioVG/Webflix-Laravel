<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('movies.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|unique:movies',
            'synopsys' => 'required|min:10',
            'duration' => 'required|integer|min:0',
            'youtube' => 'nullable|string',
            'cover' => 'required|string',
            'released_at' => 'nullable|date',
            'category_id' => 'exists:categories,id',
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->synopsys = $request->synopsys;
        $movie->duration = $request->duration;
        $movie->youtube = $request->youtube;
        $movie->cover = $request->cover;
        $movie->released_at = $request->released_at;
        $movie->category_id = $request->category_id;
        $movie->save();

        return redirect()->route('movies.index');
    }
}
