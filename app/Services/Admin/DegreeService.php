<?php

namespace App\Services\Admin;

use App\Models\Degree;
use Illuminate\Support\Str;

class DegreeService
{
    public function store($request)
    {
        Degree::create([
            'name' => Str::title($request->name),
        ]);
    }

    public function update($request, $id)
    {
        Degree::find($id)->update([
            'name' => Str::title($request->name),
        ]);
    }

    public function destroy($id)
    {
        Degree::find($id)->delete();
    }
}
