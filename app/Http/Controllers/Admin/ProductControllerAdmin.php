<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use App\Http\Requests\AddProductRequest;

class ProductControllerAdmin extends Controller
{
    public function listProductAdmin(){
        $listProduct = Product::paginate(5);
        return view('admin.products.list-product')->with([
            'listProduct' => $listProduct
        ]);
    }
    public function addProduct(){
        return view('admin.products.add-product');
    }
    public function addPostProduct(AddProductRequest $req){
        

        $linkImage = '';
        if($req->hasFile('imageSP')){
            $image = $req->file('imageSP');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
        }
        $data = [
            'name' => $req->nameSP,
            'description' => $req->descriptionSP,
            'price' => $req->priceSP,
            'image' => $linkImage
        ];
        Product::create($data);

        return redirect()->route('admin.products.listProductAdmin')->with([
            'message' => 'Thêm mới thành công'
        ]);

        
    }
    public function deleteProduct(Request $req){
        $product = Product::where('product_id', $req->idproduct)->first();
        if($product->image != null && $product->image != ''){
            File::delete(public_path($product->image));
        }
        
        // Xóa sản phẩm dựa trên ID
        $product->delete();
        return redirect()->route('admin.products.listProductAdmin')->with([
            'message' => 'Xóa thành công'
        ]);
    }

    public function detailProduct($idProduct){
        $product = Product::where('product_id', $idProduct)->first();
        return view('admin.products.detail-product')->with([
            'product' => $product
        ]);
    }

    public function updateProduct($idProduct){
        $product = Product::where('product_id', $idProduct)->first();
        return view('admin.products.update-product')->with([
            'product' => $product
        ]);
    }
    public function updatePatchProduct(AddProductRequest $req, $idProduct){
        
        $linkImage = '';
        $product = Product::where('product_id', $idProduct)->first();
        if($req->hasFile('imageSP')){
            File::delete(public_path($product->image)); // xóa file cũ đi
            $image = $req->file('imageSP');
            $newName = time() . "." . $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
        }
        $data = [
            'name' => $req->nameSP,
            'description' => $req->descriptionSP,
            'price' => $req->priceSP,
            'image' => $linkImage
        ];
        Product::where('product_id', $idProduct)->update($data);
        return redirect()->route('admin.products.listProductAdmin')->with([
            'message' => 'Sửa thành công'
        ]);
    }
}
