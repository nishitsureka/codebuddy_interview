<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
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
        $page_title = 'All Users';
        $page_sub_title = 'users';
        $userList = User::where('is_admin',0)->Paginate(10);
        return view('admin.pages.user', [
            'userList' => $userList,
            'page_title' => $page_title,
            'page_sub_title' => $page_sub_title,
        ]);
    }
}
