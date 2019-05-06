<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::guard('evaluator')->check()){
            return redirect('/evaluator');
        }else if (Auth::guard('petugas')->check()){
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }

    public function home(){
        return view('dashboard');
    }
}
