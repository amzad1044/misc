<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Contact;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->get();
        return view('admin.home.home',['users'=>$users]);
    }
}
