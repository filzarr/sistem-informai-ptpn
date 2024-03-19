<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analisasawit;
use Auth; 
use DB;
class AnalisaSawitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $analisa = Analisasawit::get();
        return view('analisa.index', compact('analisa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('analisa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateddata = $request->validate([
            'vm' => 'required',
            'nos' => 'required',
            'ffa' => 'required',
            'dobi' => 'required',
            'waktu_analisis' => 'required', 
        ]);
        $validateddata['user_id'] = Auth::id(); 
        Analisasawit::create($validateddata);
        return redirect('/analisa')->with('success', 'Berhasil Menambahkan Data Analisa Sawit');
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
        $data = Analisasawit::fint($id);
        return view('analisa.edit', compact('data'));
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
        $data = Analisasawit::find($id);
        $data->delete();
        return redirect('/analisa')->with('danger', 'Berhasil Menghapus Data');
    }
}
