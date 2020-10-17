<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   // public function index()
    //{
      //  return view('home');
    //}



    public function blogs()
    {
        return view('admin.module.blog');
    }
    public function products()
    {
        return view('admin.module.product');
    }
    public function units()
    {
        return view('admin.module.unit');
    }
    public function category()
    {
        return view('admin.module.category');
    }
}



