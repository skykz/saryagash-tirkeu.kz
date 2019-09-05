<?php

namespace App\Http\Controllers;

use App\Article;
use App\Subscribe;
use App\TypeClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guest()) {
            return view('admin.dashboard', [
                'articles' => Article::all(),
                'amount' => Article::count(),
                'types' => TypeClass::all(),
                'type' => TypeClass::count(),
                'subscribes' => Subscribe::all(),
                'count_sub' => Subscribe::count()
            ]);
        }else
        {
            return view('404');
        }
    }
}
