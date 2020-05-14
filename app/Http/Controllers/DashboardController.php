<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\User;

class DashboardController extends Controller
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
        $id = auth()->user()->id;
        $user = user::where('id' , $id)->first();
        // dd($user->role->kode_role);
        return view('admin.dashboard' , ['user' => $user]);
    }
}
