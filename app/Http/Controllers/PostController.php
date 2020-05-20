<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Image;
use DB;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::orderBy('id','desc')->get();
    	$posts = DB::table('posts')
                    ->join('categories','posts.catId','=','categories.id')
                    ->select('posts.*','categories.catName')->orderBy('id','desc')->paginate(10);

    	$cats = Category::where('status',1)->get();
    	return view('admin.post.post',[
    		'cats' => $cats,
            'posts' => $posts
    	]);
    }

    protected function validatePost($request)
    {
    	$this->validate($request,[
    		'title' => 'required|max:50|min:2',
    		'catId' => 'required',
    		'editor1' => 'required|min:4',
    		'tags' => 'required',
    		'image' => 'required'

    	]);  
    }

    protected function imageUpload($request)
    {
    	$img = $request->file('image');
    	$imageName = $img->getClientOriginalName();
    	$dir = 'PostImages/';
    	$imgUrl = $dir.$imageName;

    	//$img->move($dir,$imageName);
    	Image::make($img)->resize(1100,500)->save($imgUrl);
    	return $imgUrl;
    }
    protected function insertPost($request,$imgUrl){
    	$post = new Post();
    	$post->title = $request->title;
    	$post->catId = $request->catId;
    	$post->editor1 = $request->editor1;
    	$post->status = $request->status;
    	$post->tags = $request->tags;
        $post->image = $imgUrl;
    	$post->username = $request->username;
    	$post->save();
    }
    public function SavePost(Request $request)
    {
    	$this->validatePost($request);
    	$imgUrl = $this->imageUpload($request);
    	$this->insertPost($request,$imgUrl);

    	return redirect('/admin/post')->with('message','Post Added Successfully');
    }
    public function EditPost($id)
    {   
        $posts = Post::find($id);

        $cats = Category::where('status',1)->get();
        return view('admin.post.editPost',['cats' => $cats,'posts'=>$posts]);
    }

    protected function upPost($post,$request,$imgUrl)
    {
        $post->title = $request->title;
        $post->catId = $request->catId;
        $post->editor1 = $request->editor1;
        $post->status = $request->status;
        $post->tags = $request->tags;
        $post->image = $imgUrl;
        $post->username = $request->username;
        $post->save();
    }
    public function PostUpdate(Request $request)
    {
        $img = $request->file('image');
        if($img)
        {
            $post = Post::find($request->id);
            unlink($post->image);

            $imgUrl = $this->imageUpload($request);
            $this->upPost($post,$request,$imgUrl);
            return redirect('/admin/post')->with('message','Post updated successfully.');
        }
        else
        {
            $post = Post::find($request->id);
            $post->title = $request->title;
            $post->catId = $request->catId;
            $post->editor1 = $request->editor1;
            $post->status = $request->status;
            $post->tags = $request->tags;
            $post->username = $request->username;
            $post->save();
            return redirect('/admin/post')->with('message','Post updated successfully.');
        }
    }
    public function PostDelete($id)
    {
        $post = Post::find($id);
        $img = $post['image'];
        unlink($img);
        $post->delete();
        return redirect('/admin/post')->with('message','Post Deleted successfully.');
    }
    public function UnpubPost($id)
    {
        $post = Post::find($id);
        $post->status = 0;
        $post->save();

        return redirect()->back();
    }
    public function pubPost($id)
    {
        $post = Post::find($id);
        $post->status = 1;
        $post->save();
        return redirect()->back();
    }

}
