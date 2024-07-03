<?php

namespace App\Http\Controllers;

use App\Models\loan;
use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaction');
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
        //
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
        // $query = member::all();
        // if($request->filled('search')){
        //     $query->where('member_name', 'LIKE', '%'.$request->member_name.'%');
        // }
        // $datas = $query;
        $search = $request->input('search');
        $transactionCode = $this->GCTrx();
        $memberz = Member::where('member_name', 'like', '%' . $search . '%')->first();
        return view('transaction' , compact('members' , 'memberz' , 'transactionCode'));
    }
    public function returnabook()
    {
        // $datas = loan::all();
        return view('returnabook');
    }
    public function loaning()
    {
        $datas = loan::with('loanname')->get();
        return view('loaning' , compact('datas'));
    }

    public function addloan()
    {
        
    }

    public function loaningstore(Request $request)
    {
    //    loan::create($request->all());
    $crit = $request->validate([
        'id_member' => 'required',
        'no_trx' => 'required',
      
    ]);

    loan::create($crit);
       return redirect()->route('loaning')->with('success' , 'Berhasil melakukan transaksi pinjam');
    }

    private function GCTrx()
    {
        $userId = Auth::id();
        $date = now()->format('Ymd'); // Format tanggal: YYYYMMDD
        $time = now()->format('His'); // Format waktu: HHMMSS

        return 'TRX-' . $date . '-' . $time . '-' . $userId;
    }


}
