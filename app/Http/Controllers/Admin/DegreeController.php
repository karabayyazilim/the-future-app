<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use App\Services\Admin\DegreeService;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function __construct(DegreeService $degreeService)
    {
        $this->degreeService = $degreeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.degrees.index', [
            'degrees' => Degree::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.degrees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->degreeService->store($request);
        return redirect()->route('admin.degree.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        return view('admin.degrees.edit', [
            'degree'=>$degree,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        $this->degreeService->update($request, $degree->id);

        return redirect()->route('admin.degree.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        $this->degreeService->destroy($degree->id);
        return redirect()->route('admin.degree.index');
    }
}
