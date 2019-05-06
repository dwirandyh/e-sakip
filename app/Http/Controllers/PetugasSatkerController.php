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
        $this->middleware('guest:petugas,guest:evaluator', ['except' => 'logout']);

        $this->petugasSatker = $petugasSatker;
    }

    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }


    public function showLoginForm()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        Auth::guard('evaluator')->logout();
        Auth::guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }


    function guard()
    {
        return Auth::guard('petugas');
    }
}
