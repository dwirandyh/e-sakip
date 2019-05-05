<?php

namespace App\Http\Controllers\Evaluator;

use App\Http\Controllers\Controller;
use App\Repositories\EvaluatorRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class EvaluatorController extends Controller
{
    use AuthenticatesUsers;

    protected $evaluatorRepository;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/evaluator';

    function __construct(EvaluatorRepository $evaluatorRepository)
    {
        $this->middleware('guest', ['except' => 'logout']);

        $this->evaluatorRepository = $evaluatorRepository;
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
        return Auth::guard('evaluator');
    }
}
