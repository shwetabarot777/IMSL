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
    public function index()
    {
        return redirect()->route(auth()->user()->role);

       /* $elementActive ="Home";
         return view('backend.pages.home');*/
    }
    /**
     * Show the application contact.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('backend.pages.contact');
    }
}
