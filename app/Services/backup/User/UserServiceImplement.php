<?php

namespace App\Services\User;

use LaravelEasyRepository\Service;
use App\Repositories\User\UserRepository;
use Exception;
use Illuminate\Support\Facades\Log;

class UserServiceImplement extends Service implements UserService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function getUser()
    {
        try {
            return $this->mainRepository->getUser();
        } catch (Exception $exception) {
            Log::debug($exception->getMessage());
            return [];
        }
    }
}
