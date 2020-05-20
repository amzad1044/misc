<?php

namespace App\Http\Controllers;

use App\Page;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
    	$pages = Page::orderBy('id','desc')->get();
    	return view('admin.page.page',['pages'=>$pages]);
    }
    public function PageCreate()
    {
    	return view('admin.page.AddPage');
    }
    public function SavePage(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'editor1' => 'required'
    	]);

    	$page = new Page();
    	$page->title = $request->title;
    	$page->editor1 = $request->editor1;
    	$page->status = $request->status;

    	$page->save();
    	return redirect('/admin/page')->with('message','Page created successfully');
    }
    public function PageEdit($id)
    {
    	$page = Page::find($id);
    	return view('admin.page.editPage',['page'=>$page]);
    }

    public function UpdatePage(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'editor1' => 'required'
    	]);

    	$page = Page::find($request->id);
    	$page->title = $request->title;
    	$page->editor1 = $request->editor1;
    	$page->status = $request->status;
    	$page->save();

    	return redirect('/admin/page')->with('message','Page updated successfully');
    }
    public function PageDelete($id)
    {
    	$page = Page::find($id);
    	$page->delete();
    	return redirect('/admin/page')->with('message','Page Deleted successfully');
    }
    public function UnpublishPage($id)
    {
    	$page = Page::find($id);
    	$page->status = 0;
    	$page->save();
    	return redirect('/admin/page');
    }
    public function publishPage($id)
    {
    	$page = Page::find($id);
    	$page->status = 1;
    	$page->save();
    	return redirect('/admin/page');
    }

}
