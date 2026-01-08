<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminLoginController extends Controller
{
    public function form()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Username atau password salah');
        }

        // SIMPAN SESSION LOGIN
        session([
            'admin_login' => true,
            'admin_id'    => $admin->id_admin,
            'admin_name'  => $admin->username,
        ]);

        // Anti session fixation
        $request->session()->regenerate();

        return redirect('/dashbord');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/login');
    }
}
