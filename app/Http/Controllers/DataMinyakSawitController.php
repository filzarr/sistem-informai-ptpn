<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Ketstokminyak;
use Auth;
use App\Models\Stokminyak;
class DataMinyakSawitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stokmasuk = Ketstokminyak::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->whereColumn('stoksebelumnya', '<', 'stoksetelahnya')
        ->sum(DB::raw('stoksetelahnya - stoksebelumnya'));
        $stokkeluar = Ketstokminyak::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->whereColumn('stoksebelumnya', '>', 'stoksetelahnya')
        ->sum(DB::raw('stoksebelumnya - stoksetelahnya')); 
        $ketsawit = Ketstokminyak::join('users', 'ketstokminyaks.user_id', '=', 'users.id')->select('ketstokminyaks.*','users.name')->get();
        $stok = Stokminyak::first(); 
        return view('data-minyak-sawit.index', compact('ketsawit','stok','stokmasuk','stokkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data-minyak-sawit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateddata = $request->validate([
            'stok' => 'required',
            'type' => 'required', 
            'keterangan' => 'required',
        ]);
        DB::beginTransaction();
       try {
        if ($validateddata['type'] == "stok-masuk") {
            $stokawal;
            $stok = Stokminyak::find(1);
            $stokawal = $stok->stok;
            $stokakhir = (int)$stokawal + (int)$validateddata['stok']; 
            $stok->stok = $stokakhir;
            $stok->save();    
            $keteranganstok = new Ketstokminyak();
            $keteranganstok->stoksebelumnya = $stokawal;
            $keteranganstok->stoksetelahnya = $stokakhir;
            $keteranganstok->keterangan = $validateddata['keterangan'];
            $keteranganstok->user_id = Auth::id();
            $keteranganstok->save();
    
            DB::commit();
    
            return redirect('/data-minyak-sawit')->with('success', 'Berhasil Menambahkan Data');
        }
        if($validateddata['type'] == "stok-keluar") {
            $stokawal;
            $stok = Stokminyak::find(1);
            $stokawal = $stok->stok;
            $stokakhir = (int)$stokawal - (int)$validateddata['stok']; 
            $stok->stok = $stokakhir;
            $stok->save();    
            $keteranganstok = new Ketstokminyak();
            $keteranganstok->stoksebelumnya = $stokawal;
            $keteranganstok->stoksetelahnya = $stokakhir;
            $keteranganstok->keterangan = $validateddata['keterangan'];
            $keteranganstok->user_id = Auth::id();
            $keteranganstok->save();
    
            DB::commit();
    
            return redirect('/data-minyak-sawit')->with('success', 'Berhasil Menambahkan Data');
        } 
       } catch (\Throwable $e) {
        DB::rollback();

            dd($e);
       }
          
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
}
