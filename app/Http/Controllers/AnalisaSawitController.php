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
    public function index(Request $request)
    { 
        $analisa = Analisasawit::select('*');
        if ($request->has('filter') or $request->query('filter') !== null ) {
            $analisa->whereYear('waktu_analisis', 'like'  ,'%'.$request->query('filter').'%' );
        }
        if ($request->has('sort')) {
            $analisa->orderBy('waktu_analisis',$request->query('sort'));
        }
        
        $analisa = $analisa->paginate(15);
        return view('analisa.index', compact('analisa','request'));
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
        ],[
            'vm.required' => 'VM Wajib Diisi',
            'nos.required' => 'NOS Wajib Diisi',
            'ffa.required' => 'ffa Wajib Diisi',
            'dobi.required' => 'Dobi Wajib Diisi',
            'waktu_analisis.required' => 'Waktu Analisis Wajib Diisi', 
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
