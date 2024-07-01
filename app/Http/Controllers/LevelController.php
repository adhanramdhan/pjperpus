<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        return view('level.index' , compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Level::create($request->all());
        return redirect()->route('levels.index')->with('success' , 'Berhasil membuat data level');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Level::find($id);
        return view('level.edit' , compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Level::find($id)->update($request->all());
        return redirect()->route('levels.index')->with('success' , 'Berhasil mengubah data level');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Level::where('id' , $id)->delete();
        return redirect()->route('levels.index')->with('success' , 'Berhasil menghapus data level');
    }

    public function showTrashed()
    {
        $datasampah = Level::onlyTrashed()->get();
        return view('level.restore', compact('datasampah'));
    }

    public function restoreTrashed(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            if ($request->has('restore')) {
                Level::whereIn('id', $ids)->restore();
                return redirect('levels')->with('success', 'Berhasil mengembalikan data level');
            } elseif ($request->has('forceDelete')) {
                Level::whereIn('id', $ids)->forceDelete();
                return redirect('levels')->with('success', 'Berhasil menghapus data level permanent');
            }
        }
    }


}
