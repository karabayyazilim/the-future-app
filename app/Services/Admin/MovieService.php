<?php

namespace App\Services\Admin;

use App\Models\Movie;
use App\Models\MovieCharacter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MovieService
{
    public function store($request)
    {
        $path = $request->hasFile('img') ? $request->file('img')->store('movies', 'public') : null;

        DB::transaction(function () use ($request, $path) {
            $movie = Movie::create([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'tags' => $request->tags,
                'content' => $request->content,
                'img' => $path,
            ]);

            MovieCharacter::create([
                'movie_id' => $movie->id,
                'character_id' => $request->character_id,
            ]);
        });
    }

    public function update($request, $id)
    {
        $path = $request->hasFile('img') ? $request->file('img')->store('movies', 'public') : null;

        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->category_id = $request->category_id;
        $movie->tags = $request->tags;
        $movie->content = $request->content;
        $movie->img = $path != null ? $path : $movie->img;
        $movie->save();

        MovieCharacter::find($movie->id)->update([
            'movie_id' => $movie->id,
            'character_id' => $request->character_id,
        ]);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        MovieCharacter::where('movie_id', $id)->delete();
        isset($movie->image) ? Storage::disk('public')->delete($movie->img) : null;
        $movie->delete();
    }
}
