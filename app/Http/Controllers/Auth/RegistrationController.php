<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\RegistrationService;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function __construct(protected RegistrationService $service)
    {
    }

    public function index(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        $user = $this->service->register($request->validated());
        return redirect()->route('login')->with('success', 'Your account has beeen created');
    }
}
