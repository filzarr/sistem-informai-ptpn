<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporanharian;
class LaporanHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Laporanharian::paginate(10);
        return view('laporan-harian.index', compact('data', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan-harian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateddata = $request->validate([
            'realisasi_tbs' => '',
            'rkap_tbs' => '',
            'sisa_tbs' => '',
            'realisasi_minyaksawit' => '',
            'rkap_minyaksawit' => '',
            'realisasi_intisawit' => '',
            'rkap_intisawit' => '',
            'realisasi_rendemen' => '',
            'rkap_rendemen' => '',
            'pengiriman_minyaksawit' => '',
            'pengiriman_intisawit' => '',
            'pengiriman_cangkang' => '',
            'ptpn' => 'required',
            'tanggal' => 'required',
        ],[ 
            'ptpn.required' => 'Lokasi Harus Dipilih',
            'tanggal.required' => 'Tanggal Harus Diisi',
        ]);
        // dd($validateddata);
        Laporanharian::create($validateddata);
        return redirect('/laporan-harian')->with('success', 'Berhasil Menambahkan Data Inventaris');
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
        $data = Laporanharian:: find($id); 
        return view('laporan-harian.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateddata = $request->validate([
            'realisasi_tbs' => '',
            'rkap_tbs' => '',
            'sisa_tbs' => '',
            'realisasi_minyaksawit' => '',
            'rkap_minyaksawit' => '',
            'realisasi_intisawit' => '',
            'rkap_intisawit' => '',
            'realisasi_rendemen' => '',
            'rkap_rendemen' => '',
            'pengiriman_minyaksawit' => '',
            'pengiriman_intisawit' => '',
            'pengiriman_cangkang' => '',
            'ptpn' => 'required',
            'tanggal' => 'required',
        ],[ 
            'ptpn.required' => 'Lokasi Harus Dipilih',
            'tanggal.required' => 'Tanggal Harus Diisi',
        ]);
        $laporanharian = Laporanharian::find($id); 
        $laporanharian->update($validateddata);
        // inventaris::update($validateddata)->where('id',$id);
        return redirect('/laporan-harian')->with('info', 'Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Laporanharian::find($id);
        $data->delete();
        return redirect('/laporan-harian')->with('danger', 'Berhasil Menghapus Data');
    }
}
