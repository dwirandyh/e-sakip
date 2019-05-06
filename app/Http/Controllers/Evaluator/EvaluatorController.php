<?php

namespace App\Http\Controllers\Evaluator;

use App\Http\Controllers\Controller;
use App\Repositories\EvaluatorRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class EvaluatorController extends Controller
{
    /*
 |--------------------------------------------------------------------------
 | Login Controller
 |--------------------------------------------------------------------------
 |
 | This controller handles authenticating users for the application and
 | redirecting them to your home screen. The controller uses a trait
 | to conveniently provide its functionality to your applications.
 |
 */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/evaluator';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:evaluator')->except('logout');
    }


    public function showLoginForm()
    {
        return view('login_admin');
    }

    function guard()
    {
        return Auth::guard('evaluator');
    }
}
