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
        $data = User::where('role_user', '<>', '4')->join('role_users', 'users.role_user', '=', 'role_users.id')->get();
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
            'email' => 'required',
            'nip' => 'required',
            'role_user' => 'required', 
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
        //
    }
}
