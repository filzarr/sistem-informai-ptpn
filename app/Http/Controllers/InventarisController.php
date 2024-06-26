<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventaris;
use App\Models\category_inventaris;
use Auth;
class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        $inventaris = Inventaris::join('category_inventaris', 'inventaris.category_id', '=', 'category_inventaris.id')
            ->join('users', 'inventaris.user_id', '=', 'users.id')
            ->select('inventaris.*', 'category_inventaris.category', 'users.name'); // Pilih semua kolom dari tabel inventaris
 
        if ($request->has('filter') or $request->query('filter') !== null ) {
            $inventaris->where('inventaris.tahun_perolehan', 'LIKE' ,'%'.$request->query('filter').'%');
        }
        if ($request->has('sort')) {
            $inventaris->orderByRaw("ISNULL(inventaris.tahun_perolehan), inventaris.tahun_perolehan ".$request->query('sort'));
        }

        $inventaris = $inventaris->paginate(10);
        // dd($inventaris);
        return view('inventaris.index', compact('inventaris','request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = category_inventaris::get();
        return view('inventaris.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'nama' => 'required',
            'nomor_mesin' => 'required',
            'merek' => 'required',
            'tahun_perolehan' => 'required',
            'type' => 'required',
            'kapasitas' => 'required',
            'nomor_inventaris' => 'required',
            'nilai_aktiva' => 'required',
            'kondisi_mesin' => 'required',
            'category_id' => 'required',
        ],[
            'nama.required' => 'Nama Harus Diisi',
            'nomor_mesin.required' => 'Nomor Mesin Harus Diisi',
            'merek.required' => 'Merek Harus Diisi',
            'tahun_perolehan.required' => 'Tahun Perolehan Harus Diisi',
            'type.required' => 'Type Harus Diisi',
            'kapasitas.required' => 'Kapasitas Harus Diisi',
            'nomor_inventaris.required' => 'Nomor Inventaris Tidak Boloh Kosong',
            'nilai_aktiva.required' => 'Nilai Aktiva Harus diisi',
            'kondisi_mesin.required' => 'Kondisi Mesin Harus Diisi',
            'category_id.required' => 'Kategori Harus Dipilih',
        ]);
        $validateddata['user_id'] = Auth::id(); 
        // dd($validateddata);
        inventaris::create($validateddata);
        return redirect('/inventaris')->with('success', 'Berhasil Menambahkan Data Inventaris');
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
        $inventaris = inventaris::join('category_inventaris', 'inventaris.category_id', '=', 'category_inventaris.id')->select('inventaris.*', 'category_inventaris.category')->find($id);
        $category = category_inventaris::where('id', '<>', $inventaris->category_id)->get();
        // dd($category);
        return view('inventaris.edit', compact('inventaris','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateddata = $request->validate([
            'nama' => 'required',
            'nomor_mesin' => 'required',
            'merek' => '',
            'tahun_perolehan' => '',
            'type' => '',
            'kapasitas' => '',
            'nomor_inventaris' => '',
            'nilai_aktiva' => '',
            'kondisi_mesin' => '',
            'category_id' => 'required',
        ],[
            'nama.required' => 'Nama Harus Diisi',
            'nomor_mesin.required' => 'Nomor Mesin Harus Diisi',
            'merek.required' => 'Merek Harus Diisi',
            'tahun_perolehan.required' => 'Tahun Perolehan Harus Diisi',
            'type.required' => 'Type Harus Diisi',
            'kapasitas.required' => 'Kapasitas Harus Diisi',
            'nomor_inventaris.required' => 'Nomor Inventaris Tidak Boloh Kosong',
            'nilai_aktiva.required' => 'Nilai Aktiva Harus diisi',
            'kondisi_mesin.required' => 'Kondisi Mesin Harus Diisi',
            'category_id.required' => 'Kategori Harus Dipilih',
        ]);
        $inventaris = inventaris::find($id);
        $validateddata['user_id'] = Auth::id(); 
        $inventaris->update($validateddata);
        // inventaris::update($validateddata)->where('id',$id);
        return redirect('/inventaris')->with('info', 'Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { 
        $data = inventaris::find($id);
        $data->delete();
        return redirect('/inventaris')->with('danger', 'Berhasil Menghapus Data');
    }
    public function inventaris_create(){
        return view('inventaris.category-create');
    }
    public function inventaris_create_submit(Request $request){
        $validateddata = $request->validate([
            'category' => 'required',
        ]);
        category_inventaris::create($validateddata);
        
        return redirect('/inventaris')->with('success', 'Berhasil Menambahkan Data Kategory');

    }
}
