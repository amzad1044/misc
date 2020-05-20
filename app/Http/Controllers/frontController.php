<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Customer;
use App\Page;
use Session;

class frontController extends Controller
{
    

    public function index()
    {
        $posts = Post::where('status',1)->orderBy('id','desc')->paginate(5);

    	return view('front.home.home',[
            'posts' => $posts
        ]);
    }
    public function contact()
    {
    	return view('front.contact.contact');
    }
    public function singlePost($id,$cat)
    {
        $post = Post::find($id);

        $relatedPosts = Post::where('catId',$cat)->where('status',1)->get();

    	return view('front.single.single',['post'=>$post,'relatedPosts'=>$relatedPosts]);
    }
    public function category($id)
    {
        $catPosts = Post::where('catId',$id)->where('status',1)->paginate(5);
        return view('front.category.category',[
            'catPosts'=>$catPosts
            ]);
    }
    public function Customerauth()
    {
        return view('front.customer.signup');
    }
    public function CustomerCreate(Request $request)
    {
        $this->validate($request,[
            'email' =>'required',
            'password' => 'required'
        ]);

        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone = $request->phone;

        $customer->save();

        $custId = $customer->id;
        $custName = $customer->fname;

        Session::put('custId',$custId);
        Session::put('custName',$custName);
        Session::put('custEmail',$customer->email);
        return redirect('/');
    }
    public function LoginCustomer(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        $pass = $request->input('password');

        $customer = Customer::where('email',$request->email)->first();
        if($customer && password_verify($pass,$customer->password))
        {
            Session::put('custId',$customer->id);
            Session::put('custName',$customer->fname);
            Session::put('custEmail',$customer->email);
            return redirect('/');
        }
        else
        {
            return redirect('/')->with('message','Invelid user!!');
        }
    }
    public function LogoutCustomer()
    {
        Session::forget('custId');
        Session::forget('custName');

        return redirect('/');
    }
    public function Page($id)
    {
        $page = Page::find($id);
        return view('front.page.page',['page'=>$page]);
    }
}
