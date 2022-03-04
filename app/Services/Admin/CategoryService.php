<?php

namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    public function store($request)
    {
        Category::create([
            'name' => Str::title($request->name),
        ]);
    }

    public function update($request, $id)
    {
        Category::find($id)->update([
            'name' => Str::title($request->name),
        ]);
    }
}
