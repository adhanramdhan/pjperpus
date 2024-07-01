<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::with('levels')->get();
        return view('user.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Level::get();
        return view('user.create' , compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'User created');
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
        $edit = User::find($id);
        $levels = Level::get();
        return view('user.edit' , compact('edit' , 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'id_level' => $request->id_level,
            'email' => $request->email,
            'password' =>  password_hash($request->password, PASSWORD_DEFAULT),
        ]);
        return redirect()->route('user.index')->with('success', 'User updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id' , $id)->delete();
        return redirect()->route('user.index')->with('success', 'User deleted');
    }

    public function showTrashed()
    {
        $trashedData = User::onlyTrashed()->get();
        return view('user.restore', compact('trashedData'));
    }

    public function restoreTrashed(Request $request)
    {
        $ids = $request->input('ids');
        if ($ids) {
            if ($request->has('restore')) {
                User::whereIn('id', $ids)->restore();
                return redirect()->route('user.index')->with('success', 'Users restored');
            } elseif ($request->has('forceDelete')) {
                User::whereIn('id', $ids)->forceDelete();
                return redirect()->route('user.index')->with('success', 'Users permanently deleted');
            }
        }
    }

}
