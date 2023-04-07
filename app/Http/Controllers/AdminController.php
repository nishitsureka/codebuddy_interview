<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
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
        $page_title = 'Admin Dashboard';
        $page_sub_title = 'Dashboard';
        $userCount = User::where('is_admin',0)->count();
        $catCount = Category::count();
        return view('admin.pages.dashboard',[
            'page_title' => $page_title,
            'page_sub_title' => $page_sub_title,
            'userCount' => $userCount,
            'catCount' => $catCount,
        ]);
    }
}
