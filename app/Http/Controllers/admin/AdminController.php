<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('index2');
    }

    // Xử lý đăng nhập
    public function logon(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('login')->with('err', 'Sai tài khoản hoặc mật khẩu');
        }
    }

    public function logout()
    {
        Auth::logout(); // Hủy phiên đăng nhập
        return redirect()->route('login');
    }

    public function create()
    {

        return view('register');
    }

    public function register(Request $request)
    {
        $msg = "";
        try {
            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $msg = 'Đăng ký thành công';
        } catch (\Throwable $th) {
            $msg = 'Đăng ký THẤT BẠI';
        }

        return redirect()->route('login')->with('msg', $msg);
    }
}
