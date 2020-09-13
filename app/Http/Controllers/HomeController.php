<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\HasPermissionsTrait;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view_data = array('page_title' => 'All Categories' );  
        return view('admin\home',$view_data);
    }
    public function add_role()
    {
        $user= User::find(1);
        $user->roles()->sync(['3','2']);
    }
}
