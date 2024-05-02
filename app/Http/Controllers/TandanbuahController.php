<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tandanbuah;
class TandanbuahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tandanbuah = Tandanbuah::paginate(15);
        return view('tandan-buah.index', compact('tandanbuah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tandan-buah.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'panen_masuk' => 'required:',
            'tbs_diolah' => 'required', 
            'kategori' => 'required',
            'tanggal' => 'required',
        ],[
            'panen_masuk.required' => 'Data Panen Masuk Tidak Boleh Kosong',
            'tbs_diolah.required' => 'Tbs Diolah Tidak Boleh Kosong', 
            'kategori.required' => 'Kategori Harus Dipilih',
            'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
        ]);
        Tandanbuah::create($validateddata);
        return redirect('/tandan-buah')->with('success', 'Berhasil Menambahkan Data Tandan Buah');

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
        $tandan = Tandanbuah::find($id);
        return view('tandan-buah.edit', compact('tandan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateddata = $request->validate([
            'panen_masuk' => 'required:',
            'tbs_diolah' => 'required', 
            'kategori' => 'required',
            'tanggal' => 'required',
        ],[
            'panen_masuk.required' => 'Data Panen Masuk Tidak Boleh Kosong',
            'tbs_diolah.required' => 'Tbs Diolah Tidak Boleh Kosong', 
            'kategori.required' => 'Kategori Harus Dipilih',
            'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
        ]);
        $tandan = Tandanbuah::find($id);
        $tandan->update($validateddata);
        return redirect('/tandan-buah')->with('success', 'Berhasil Mengupdate Data Tandan Buah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Tandanbuah::find($id);
        $data->delete();
        return redirect('/tandan-buah')->with('danger', 'Berhasil Menghapus Data');
    }
}
