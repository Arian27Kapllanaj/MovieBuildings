<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

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

    public function user() {
        return view('user_page');
    }

    public function moderator() {
        return view('moderator_page');
    }

    public function admin() {
        return view('admin_page');
    }
}
