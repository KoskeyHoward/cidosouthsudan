<?php

namespace App\Http\Controllers;
use App\Models\projects;
use App\Models\programs;

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
        return view('home');
    }

    public function footerList()
    {
        $programfooter = programs::take(5)->get();
        $projectfooter = projects::take(5)->get();
        return view('default', compact('programfooter', 'projectfooter'));
    }
}
