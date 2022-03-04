<?php

namespace App\Services\Admin;

use App\Models\Artist;
use Illuminate\Support\Facades\Storage;

class ArtistService
{
    public function store($request)
    {
        $path = $request->hasFile('avatar') ?
            $request->file('avatar')->store('artists', 'public')
            : null;

        Artist::create([
           'full_name' => $request->full_name,
           'content' => $request->content,
           'avatar' => $path,
        ]);
    }

    public function update($request, $id)
    {
        $path = $request->hasFile('avatar') ?
            $request->file('avatar')->store('artists', 'public')
            : null;
        $artist = Artist::find($id);
        $artist->full_name = $request->full_name;
        $artist->content = $request->content;
        $path != null ? $artist->avatar = $path : null;
        $artist->save();
    }

    public function destroy($id)
    {
        $artist = Artist::find($id);
        Storage::disk('public')->delete($artist->avatar);
        $artist->delete();
    }
}
