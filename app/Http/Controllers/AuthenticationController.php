<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserLoginRequest;

class AuthenticationController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(UserLoginRequest $req){
        
        $dataUserLogin = [
            'email' => $req->email,
            'password' => $req->password
        ];
        $remember = $req->has('remember');

        if(Auth::attempt($dataUserLogin, $remember)){
            if(Auth::user()->role == '1'){
                // Đăng nhập thành công vào admin
                return redirect()->route('admin.products.listProductAdmin')->with([
                    'message' => 'Chào mừng Admin đã đăng nhập'
                ]);
            }
            else{
                // Đăng nhập thành công vào user
                return redirect()->route('user.products.listProductUser')->with([
                    'message' => 'Chào mừng User đã đăng nhập'
                ]);
            }
            
        }else{
            // Đăng nhập thất bại
            return redirect()->back()->with([
                'message' => 'Email hoặc Password không đúng'
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
            return redirect()->back()->with([
                'message' => 'Tài khoản đã tồn tại'
            ]);
        }else{
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'password' =>Hash::Make($req->password)
            ];
            $newUser = User::create($data);

            // đăng ký xong tk sẽ chạy sang trang đăng nhập chứ không vào luôn
            return redirect()->route('login')->with([
                'message' => 'Đăng ký thành công. Vui lòng đăng nhập lại'
            ]);


        }
    }
}
