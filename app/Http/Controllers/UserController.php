<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   
   public function store(Request $request)
   {
    $request->validate([
        'nama_user' =>'required',
        'username' =>'required',
        'password' =>'required',
        'telepon' =>'required',
        'email' =>'required',
        'telepon' =>'required',
    ]);
    //jika username sudah ada//
    if (User::where('username', $request->username)->first())
        return back()->withErrors(['username' =>'Username sudah terdaftar!']);

    $user = new User($request->all());
    //enskripsi password//
    $user->password = Hash::make($request->password);
    $user->save();
    return redirect()->route('user.index')->with(['message' => 'Data berhasil ditambah']);

   }
   
   
    public function create()
    {
        $title = 'Tambah User';
        $levels = ['admin', 'user'];
        return view('user.create', compact('title', 'levels'));
    }
    
    
    
    public function index(Request $request)
    {
        $title = 'Data User';
        $q = $request->query('q');
        $users = User::where('nama_user', 'like', '%'. $q . '%')
            ->paginate(10)
            ->withQueryString();
        $no = $users->firstItem();
        return view('user.index', compact('title', 'users', 'q', 'no'));
    }



    public function passwordAction(Request $request)
    {
        $request->validate([
            'pass1' => 'required',
            'pass2' => 'required',
            'pass3' => 'required',
        ]);

        if (!Hash::check($request->pass1, Auth::user()->password))
        return back()->withErrors(['pass1' => 'Password lama salah']);

        if ($request->pass2 != $request->pass3)
        return back()->withErrors(['pass2' => 'Password baru dan konfirmasi password baru harus sama']);

        User::where('id_user', Auth::id())->update([
            'password' => Hash::make($request->pass2)
        ]);
        return redirect()->route('user.password')->with(['message' => 'Password berhasil diubah!']);

    }


    public function password()
    {
        $title = 'Ubah.Password' ;
        return view ('user.password', compact('title'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');

    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            return redirect()->route('home');
            //return 'Login berhasil';
        }

        return back()->withErrors([
            'username' => 'Salah Kombinasi username dan password',
        ]);
    }

    public function login()
    {
        $title = 'Login';
        return view('user.login', compact('title'));
    }
    // public function index()
    // {
    //     $title = 'Data User';
    //     $users = User::get();
    //     return view('user.index', compact('title', 'users'));
    // }
}