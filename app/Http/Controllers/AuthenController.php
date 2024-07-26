<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenController extends Controller
{
    public function login() {
        return view("login");
    }
    public function postLogin(Request $request) {
        if(Auth::attempt([
            "email" => $request->email,
            "password" => $request->password,
        ])){
            // Đăng nhặp thành công
            if(Auth::user()->role == "1"){
                return redirect()->route("admin.products.listProducts");
            }else{
                // Redirect user
            }
        }else{
            return redirect()->back()->with([
                "message" => "Email or MK không đúng"
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("login")->with([
            "message" => "Đăng xuất thành công"
        ]);
    }

    public function register() {
        return view("register");
    }

    public function postRegister(Request $request) {
        $check = User::where("email", $request->email)->exists();
        if($check){
            if($request->password === $request->confirmpassword){
            $data = [
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),

            ];
            User::create($data);
            return redirect()->route("login")->with(["message" => "Đăng ký thành công"]);
            }

            return redirect()->back()->with([
                "message" => "Confirm không khớp"
            ]);
        }else{
            return redirect()->back()->with([
                "message" => "Email đã tồn tại"
            ]);
        }
    }
}
