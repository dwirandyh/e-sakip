<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\PetugasSatkerRepository;

class PetugasSatkerController extends Controller
{
    use AuthenticatesUsers;

    protected $petugasSatker;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    function __construct(PetugasSatkerRepository $petugasSatker)
    {
        $this->middleware('guest', ['except' => 'logout']);

        $this->petugasSatker = $petugasSatker;
    }

    public function index(){
        return [];
    }

    public function showLoginForm()
    {
        return view('login');
    }



    function guard()
    {
        return Auth::guard('petugas');
    }
}
