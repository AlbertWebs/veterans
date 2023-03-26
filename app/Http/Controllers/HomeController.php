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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    public function who_we_are()
    {
        return view('front.who_we_are');
    }

    public function explore()
    {
        return view('front.explore');
    }

    public function regions()
    {
        return view('front.regions');
    }


    public function our_history()
    {
        return view('front.our_history');
    }

    public function contact_us()
    {
        return view('front.contact_us');
    }





}
