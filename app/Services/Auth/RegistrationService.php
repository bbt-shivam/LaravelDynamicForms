<?php

namespace App\Services\Auth;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class RegistrationService
{

    public function __construct(protected UserRepositoryInterface $repo)
    {
    }

    public function register(array $data){
        $data['password'] = Hash::make($data['password']);
        return $this->repo->createUser($data);
    }
}
