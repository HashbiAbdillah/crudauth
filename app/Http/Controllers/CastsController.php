<?php

namespace App\Http\Controllers;

use App\Models\casts;
use App\Http\Requests\StorecastsRequest;
use App\Http\Requests\UpdatecastsRequest;

class CastsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = casts::select('id','name', 'umur')->get();
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecastsRequest  $request, casts $cast)
    {
        casts::create($request->all());

        return redirect()
                ->route('cast.index')
                ->with(['success' => 'Data '.$request['nama'].' berhasil disimpan']);

    }

    /**
     * Display the specified resource.
     */
    public function show(casts $cast)
    {
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(casts $cast)
    {
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecastsRequest $request, casts $cast)
    {
            $request->validate([
                'name' => 'required|string|max:255',
                'umur' => 'required|integer',
                'bio' => 'nullable|string',
            ]);
        $cast->update($request->all());
        return redirect()->route('cast.index')->with('success', 'Cast updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(casts $cast)
    {
        $cast->delete();
        return redirect()->route('cast.index')->with('success', 'Cast deleted successfully');
    }
}
