<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategoryAdmin(){
        $listCategory = Category::paginate(5);
        return view('admin.categories.list-category')->with([
            'listCategory' => $listCategory
        ]);
        
    }

    public function addCategory(){
        return view('admin.categories.add-category');
    }
    public function addPostCategory(Request $req){
        $data = [
            'name' => $req->nameTL,
        ];
        Category::create($data);
        $listCategory = Category::paginate(5);
        return view('admin.categories.list-category')->with([
            'listCategory' => $listCategory,
            'message' => 'Thêm mới thể loại thành công'
        ]);
    }
    public function deleteCategory(Request $req){
        $category = Category::where('category_id', $req->idcategory)->first();
        
        
        // Xóa sản phẩm dựa trên ID
        $category->delete();
        return redirect()->route('admin.categories.listCategoryAdmin')->with([
            'message' => 'Xóa thành công'
        ]);
    }

    public function updateCategory($idCategory){
        $category = Category::where('category_id', $idCategory)->first();
        return view('admin.categories.update-category')->with([
            'category' => $category
        ]);
    }
    public function updatePatchCategory($idCategory, Request $req){
        $category = Category::where('category_id', $idCategory)->first();
        $data = [
            'name' => $req->nameTL,
        ];
        Category::where('category_id', $idCategory)->update($data);
        return redirect()->route('admin.categories.listCategoryAdmin')->with([
            'message' => 'Sửa thành công'
        ]);
    }
}
