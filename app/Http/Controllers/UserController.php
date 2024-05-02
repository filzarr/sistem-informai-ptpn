<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('role_user', '<>', '4')->join('role_users', 'users.role_user', '=', 'role_users.id')->select('users.*', 'role_users.role')->get();
        // dd($data);
        return view('user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateddata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'nip' => 'required|unique:users',
            'role_user' => 'required', 
        ],[
            'name.required' => 'Nama Harus Diisi',
            'email.required' => 'Email Harus Diisi',
            'email.unique' => 'Email Sudah Pernah Digunakan',
            'nip.required' => 'NIP Harus Diisi',
            'nip.unique' => 'NIP Sudah Pernah Digunakan',
            'role_user.required' => 'Role User Harus Dipilih',
        ]);
        $password = Str::random(5);
        $validateddata['password'] = $password;
        $validateddata['active'] = 1;
        Mail::to($validateddata['email'])->send(new SendEmail($validateddata['name'],$validateddata['nip'],$validateddata['password']));
        // dd($validateddata);
        $validateddata['password'] = Hash::make($validateddata['password']); 
        User::create($validateddata);
        return redirect('/user')->with('success', 'Berhasil Menambahkan Pengguna');
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
        $data = User::find($id);
        $data->delete();
        return redirect('/user')->with('danger', 'Berhasil Menghapus Pengguna');
    }
    public function active(string $id){
        $data = User::find($id);
        if ($data->active == 1) {
            
        $data->update([
            'active' => '0',
        ]);
        }
        else{
            $data->update([
                'active' => '1',
            ]); 
        }
        return redirect('/user')->with('info', 'Berhasil Mengaktifkan/Menonaktifkan Pengguna');
    }
}
