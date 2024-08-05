<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Session;

class AuthController extends Controller
{   
    public function login(){
        return view('login');
    }
    public function postLogin(Request $req){
        $dataUserLogin = [
            'email' => $req->email,
            'password'=> $req->password
        ];
        $remmember = $req->has('remember');
        if(Auth::attempt($dataUserLogin, $remmember)){
            //logout hết các tài khoản khác
            Session::where('user_id', Auth::id())->delete();
            //Tạo phiên đăng nhập mới
            session()->put('user_id', Auth::id());
            
            //Đăng nhập thành công
        if(Auth::user()->role == '2'){
            return redirect()->route('admin.products.listProduct')->with([
                'message' => 'Đăng nhập thành công'
            ]);
        }else{
            echo "Đăng nhập vào user";
        }
        }else{
            //Đăng nhập thất bại
            return redirect()->back('login')->with([
                'message' => 'Email hoặc password không đúng'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with([
                'message' => 'Đăng xuất thành công'
        ]);
    }

    public function register(){
        return view('register');
    }

    public function postRegister(Request $req){
        $check = User::where('email', $req->email)->exists();
        if($check){
            return redirect()->route('register')->with([
                'message' => 'Email đã tồn tại'
            ]);
        }else{
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                 'phone' => $req->phone,
                'password' => Hash::make($req->password)
                
               
            ];
            $newUser = User::create($data);
            //Auth::login($newUser);
            //return =>

            return redirect()->route('login')->with([
                'message' => 'Đăng ký thành công'
            ]);
        }
    }
}
