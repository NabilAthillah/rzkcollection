<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Users::all();
        dd($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // Buat instansiasi objek User dan isi dengan data yang validasi
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Menggunakan fungsi bcrypt untuk meng-hash password

        // Simpan pengguna ke dalam database
        $user->save();

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        return redirect()->route('login')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        // Cari pengguna berdasarkan email
        $user = Users::where('name', $request->name)->first();
        // Jika pengguna ditemukan dan password sesuai
        if ($user && Hash::check($request->password, $user->password)) {
            // Lakukan sesuatu setelah berhasil login, seperti menyimpan data sesi atau redirect ke halaman lain
            $request->session()->put('name', $user['name']);
            return redirect()->route('home')->with('user', $user);
        }

        // Jika email atau password tidak valid
        return redirect()->route('login')->with('error', 'Invalid email or password');
    }

    public function logout(){
        if(session()->has('name')){
            session()->flush('name');
            session()->regenerate();
        }
        return redirect()->route('login');
    }
}
