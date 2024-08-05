<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Usercontroller extends Controller
{
    public function listUsers(){
        $listUsers = DB::table('users')
        ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
        ->select('users.id', 'users.name', 'users.email', 'users.phongban_id', 'phongban.ten_donvi')
        ->get();
        return view('users/listUsers')->with([
            'listUsers' => $listUsers
        ]);
    }

    public function addUsers(){
        $phongBan = DB::table('phongban')->select('id', 'ten_donvi')
        ->get();
      return view('users/addUsers')->with([
        'phongBan' =>$phongBan
      ]);
    }
    public function addPostUsers(Request $req){
        $data = [
            'name' => $req->name, //$req->name ~ $_POST['name']
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($data);

        return redirect()->route('users.listUsers');
    }

    public function deleteUsers($userId){
        DB::table('users')->where('id', $userId)->delete();
        return redirect()->route('users.listUsers');
    }

    public function updateUser($userId){
        $phongBan = DB::table('phongban')->select('id', 'ten_donvi')
        ->get();
        $user = DB::table('users')->where('id', $userId)->first();
      return view('users/updateUsers')->with([
        'phongBan' =>$phongBan,
        'user' => $user
      ]);
}

public function updatePostUsers(Request $req){
    $data = [
        'name' => $req->name, //$req->name ~ $_POST['name']
        'email' => $req->email,
        'phongban_id' => $req->phongban,
        'tuoi' => $req->tuoi,
        'songaynghi' => $req->ngaynghi,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
    DB::table('users')->where('id', $req->userId)->update($data);
    return redirect()->route('users.listUsers');
}

public function test(){
   return view('admin.layouts.sidebar')->with([

   ]);
}
}