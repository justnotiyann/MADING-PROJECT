<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;


// ROUTING = Atur URL yang akan dituju

// Tampilan awal
Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    echo 'Berhasil login dengan username ' . auth()->user()->name;
});


// Tampilan Login
Route::get('/login', function () {
    return view('login');
});

// untuk login
Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // JIka berhasil login maka diarahkan ke routes dashboard
        return redirect()->intended('dashboard');
    }

    // Jika gagal maka kembali ke routes login dengan berikan flash session dengan nama 'fail' dan pesan 'something wrong'
    return back()->with('fail', 'Something wrong');

});


// Tampilan Register
Route::get('/register', function () {
    return view('register');
});

// Untuk registrasi
Route::post('/register', function (Request $request) {

    // validasi input user
    $request->validate([
        'name' => 'required|string|min:3|regex:/^[a-zA-Z\s]+$/',
        //  regex agar hanya berupa string
        'email' => 'required|min:3|email|unique:users',
        'username' => 'required|min:3|unique:users',
        'password' => 'required|min:6',
    ]);

    // tambah data kedalam tabel user
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
        'password' => bcrypt($request->password), // Proses hashing / decode / enkripsi data password user
    ]);

    echo 'berhasil daftar user';


});



//


// HTTP METHOD
// CRUD
// CREATE READ UPDATE DELETE

// CREATE   = BUAT DATA => POST     => tambah data / login / register
// READ     = BACA / AMBIL DATA     => GET
// UPDATE   = UPDATE / UBAH DATA    => PUT
// DELETE   = DELETE / HAPUS        => DELETE
