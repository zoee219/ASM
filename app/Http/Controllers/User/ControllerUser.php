<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ControllerUser extends Controller
{
    public function listProductUser(){
        $listProduct = Product::all(); // Lấy tất cả sản phẩm
        return view('user.products.list-product', compact('listProduct'));
    }
}