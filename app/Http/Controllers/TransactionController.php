<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\detail_loaners;
use App\Models\loan;
use App\Models\member;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf as PDF; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trx.transaction');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = detail_loaners::find($id);
        return view('trx.show' , compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function loan()
    {

    }

    public function showTrx(Request $request)
    {
        $members = member::all();
        $search = $request->input('search');
        $transactionCode = $this->GCTrx();
        $books = Book::all();
        $memberz = Member::where('member_name', 'like', '%' . $search . '%')->first();
        $msname = Member::where('member_name', 'like', '%' . $search . '%')->get();
        return view('trx.transaction' , compact('members' , 'memberz' , 'transactionCode' , 'books' , 'msname'));
    }
    public function returnabook()
    {
        // $datas = loan::all();
        return view('trx.returnabook');
    }
    public function loaning()
    {
        
        $datas = loan::with(['loanname' , 'dls'])->get();
        return view('trx.loaning' , compact('datas'));
    }


    public function loaningstore(Request $request)
    {
        

        // Simpan data ke tabel loans
        $loan = loan::create([
            'no_trx' => $request->no_trx,
            'id_member' => $request->id_member,
        ]);

        // $loans = $loan->id;
        // $record = loan::orderBy('id', 'desc')->first();

        // Simpan data ke tabel detail_loans
        foreach ($request->id_book as $index => $id_book) {
            detail_loaners::create([
                'id_loaners' => $loan->id,
                'id_book' => $id_book,
                'dateOfloan' => $request->dateOfloan[$index],
                'dateOfreturn' => $request->dateOfreturn[$index],
                'descriptions' => $request->descriptions[$index],
            ]);
        }

        return redirect()->to('loaning')->with('success', 'Loan created successfully!');
    }



    private function GCTrx()
    {
        date_default_timezone_set("Asia/Jakarta");
        $kod = loan::orderBy('id', 'desc')->first   ();
        
        $userId = Auth::id();
        $date = now()->format('Ymd');
        $time = now()->format('His'); 

        return 'TRX-' . $date . '-' . $time . '-' . $userId;
    }

    public function printPDF($id)
    {
        // Ambil data loan berdasarkan ID
        $loan = Loan::with('loanname', 'dls')->findOrFail($id);

        // Buat PDF dari view
        $pdf = PDF::loadView('trx.pdf', compact('loan'));

        $code = $this->GCpdf();
        // Unduh PDF
        return $pdf->download($code . '.pdf');
    }

    private function GCpdf()
    {
        $name = Auth::id();
        date_default_timezone_set("Asia/Jakarta");
        $date = now()->format('dmYHi');
        // $time = now()->format('His');

        return 'TRX-' . $date . '-'. '-' . $name;
    }

    public function searchMembers(Request $request)
{
    $search = $request->input('search');
    $members = member::where('member_name', 'like', '%' . $search . '%')->get();
    return response()->json($members);
}


}
