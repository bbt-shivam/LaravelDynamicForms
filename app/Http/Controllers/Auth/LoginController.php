<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct(protected LoginService $service)
    {
    }

    public function index(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        $user = $this->service->login($request->validated());

        Auth::login($user);

        return redirect()->intended('dashboard')->with('success', 'Login success');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
