<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class categoryController extends Controller
{
    public function index()
    {	
    	$categories = Category::orderBy('id','desc')->paginate(10);
    	return view('admin.category.category',['categories'=>$categories]);
    }
    public function CategoryAdd()
    {
    	return view('admin.category.addCategory');
    }
    public function CategorySave(Request $request)
    {
    	$this->validate($request,[
    		'catName' => 'required|alpha|max:10|min:2'
    	]);

    	$category = new Category();
    	$category->catName = $request->catName;
    	$category->status = $request->status;
    	$category->save();
    	return redirect('/admin/category')->with('message','Category added successfully');
    }
    public function EditCategory($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.categoryEdit',['category'=>$category]);
    }
    public function UpdateCategory(Request $request)
    {
    	$this->validate($request,[
    		'catName' => 'required|alpha|max:10|min:2'
    	]);
    	
    	$category = Category::find($request->id);
    	$category->catName = $request->catName;
    	$category->status = $request->status;
    	$category->save();
    	return redirect('/admin/category')->with('message','Category Updated successfully');
    }
    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/admin/category')->with('message','Category Deleted Successfully.');
    }
    public function UnpublishCat($id)
    {
        $category = Category::find($id);
        $category->status = 0;
        $category->save();

        return redirect('/admin/category');
    }
    public function publishCat($id)
    {
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        return redirect('/admin/category');
    }
}
