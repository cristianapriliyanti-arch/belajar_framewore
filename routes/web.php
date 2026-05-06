<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL (LANGSUNG KE LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/login-mahasiswa');
});


/*
|--------------------------------------------------------------------------
| LOGIN MAHASISWA
|--------------------------------------------------------------------------
*/

// FORM LOGIN
Route::get('/login-mahasiswa', function () {
    return view('login-mahasiswa');
});

// PROSES LOGIN
Route::post('/login-mahasiswa', function (Request $request) {

    $username = $request->username;
    $password = $request->password;

    if ($username == "cristian" && $password == "123") {

        return redirect('/dashboard-mahasiswa')
            ->withCookie(cookie('user_mahasiswa', $username, 60));
    }

    return back()->with('error', 'Username atau Password salah!');
});


/*
|--------------------------------------------------------------------------
| DASHBOARD MAHASISWA
|--------------------------------------------------------------------------
*/
Route::get('/dashboard-mahasiswa', function (Request $request) {

    if (!$request->cookie('user_mahasiswa')) {
        return redirect('/login-mahasiswa');
    }

    return view('dashboard-mahasiswa', [
        'user' => $request->cookie('user_mahasiswa')
    ]);
});


/*
|--------------------------------------------------------------------------
| LOGOUT MAHASISWA
|--------------------------------------------------------------------------
*/
Route::get('/logout-mahasiswa', function () {
    return redirect('/login-mahasiswa')
        ->withCookie(cookie()->forget('user_mahasiswa'));
});


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

// FORM LOGIN ADMIN
Route::get('/login-admin', function () {
    return view('login-admin');
});

// PROSES LOGIN ADMIN
Route::post('/login-admin', function (Request $request) {

    $username = $request->username;
    $password = $request->password;

    if ($username == "admin" && $password == "admin123") {

        session(['admin' => $username]);

        return redirect('/dashboard-admin');
    }

    return back()->with('error', 'Login admin gagal!');
});


/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/dashboard-admin', function () {

    if (!session('admin')) {
        return redirect('/login-admin');
    }

    return view('dashboard-admin');
});


/*
|--------------------------------------------------------------------------
| LOGOUT ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/logout', function () {

    session()->forget('admin');

    return redirect('/login-admin');
});


/*
|--------------------------------------------------------------------------
| MANAJEMEN ANGGOTA
|--------------------------------------------------------------------------
*/

// HALAMAN DAFTAR ANGGOTA
Route::get('/daftar-anggota', function () {

    if (!session('admin')) {
        return redirect('/login-admin');
    }

    return view('daftar-anggota');
});

// FORM TAMBAH ANGGOTA
Route::get('/tambah-anggota', function () {

    if (!session('admin')) {
        return redirect('/login-admin');
    }

    return view('tambah-anggota');
});

// PROSES SIMPAN ANGGOTA
Route::post('/simpan-anggota', function (Request $request) {

    $anggota = session('anggota', []);

    $anggota[] = [
        'nama' => $request->nama,
        'nim' => $request->nim,
        'angkatan' => $request->angkatan,
        'wa' => $request->wa
    ];

    session(['anggota' => $anggota]);

    return redirect('/dashboard-admin')->with('success', 'Data berhasil ditambahkan!');
});


/*
|--------------------------------------------------------------------------
| ASPIRASI
|--------------------------------------------------------------------------
*/
Route::get('/aspirasi', function () {
    return view('aspirasi');
});


/*
|--------------------------------------------------------------------------
| HASIL ASPIRASI
|--------------------------------------------------------------------------
*/
Route::get('/hasil_aspirasi', function () {
    return view('hasil_aspirasi');
});