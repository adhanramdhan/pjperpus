<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Book::all();
        return view('book.index' ,  compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('book.index')->with('success' , 'Berhasil membuat data buku');
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
        $edit = Book::find($id);
        return view('book.edit' , compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Book::where('id' , $id)->update([
            'books_name' => $request->books_name,
            'author' => $request->author,
            'genre' => $request->genre,
            'qty' => $request->qty,
            'publisher' => $request->publisher,
            'description' => $request->description,
        ]);
        return redirect()->route('book.index')->with('success' , 'Berhasil update data buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::where('id' , $id)->delete();
        return redirect()->route('book.index')->with('success' , 'Berhasil menghapus data buku');
    }

    public function showTrashed()
    {
        $datasampah = Book::onlyTrashed()->get();
        return view('book.restore', compact('datasampah'));
    }

    public function restoreTrashed(Request $request)
    {
        $ids = $request->input('ids');
        if ($ids) {
            if ($request->has('restore')) {
                Book::whereIn('id', $ids)->restore();
                return redirect()->route('book.index')->with('success', 'books restored');
            } elseif ($request->has('forceDelete')) {
                Book::whereIn('id', $ids)->forceDelete();
                return redirect()->route('book.index')->with('success', 'books permanently deleted');
            }
        }
        return redirect()->route('book.index')->with('error', 'No books selected');
    }
}
