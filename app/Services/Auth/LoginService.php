<?php

namespace App\Services\Auth;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected UserRepositoryInterface $repo)
    {
        //
    }

    public function login(array $credentials){
        $user = $this->repo->findByEmail($credentials['email']);
        
        if(!$user || !Hash::check($credentials['password'], $user->password)){
            throw ValidationException::withMessages([
                'email' => 'The provided credentials are incorrect'
            ]);
        }

        return $user;
    }
}
