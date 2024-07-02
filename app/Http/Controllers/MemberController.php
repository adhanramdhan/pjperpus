<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = member::all();
        return view('member.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        member::create($request->all());
        return redirect()->route('member.index')->with('success' , 'Berhasil membuat data member');
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
        $edit = member::find($id);
        return view('member.edit' , compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        member::where('id', $id)->update([
            'nama_anggota' => $request->nama_anggota,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
        ]);
        return redirect()->route('member.index')->with('success' , 'Berhasil mengubah data member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        member::where('id' , $id)->delete();
        return redirect()->route('member.index')->with('success' , 'Berhasil menghapus data member');
    }

    public function showTrashed()
    {
        $datasampah = member::onlyTrashed()->get();
        return view('member.restore' , compact('datasampah'));
    }

    public function restoreTrashed(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            if ($request->has('restore')) {
                member::onlyTrashed()->restore();
                return redirect()->to('member')->with('success' , 'berhasil mengembalikan data');
            } elseif ($request->has('forceDelete')) {
                member::onlyTrashed()->forceDelete();
                return redirect()->to('member')->with('success' , 'berhasil menghapus data permanen');
                
            }
        }
    }




}
