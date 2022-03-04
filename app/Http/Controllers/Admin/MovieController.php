<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MovieRequest;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Movie;
use App\Services\Admin\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.movies.index', [
            'movies' => Movie::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create', [
            'categories' => Category::all(),
            'artists' => Artist::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\MovieRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $this->movieService->store($request);

        return redirect()->route('admin.movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', [
            'movie' => $movie,
            'categories' => Category::all(),
            'artists' => Artist::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Admin\MovieRequest $request
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $this->movieService->update($request, $movie->id);

        return redirect()->route('admin.movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $this->movieService->destroy($movie->id);

        return redirect()->route('admin.movie.index');
    }
}
