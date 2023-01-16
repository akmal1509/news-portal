<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use App\Services\Base\BaseService;
use Exception;
use Illuminate\Support\Facades\Log;

class UserService extends BaseService
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

    /**
     * Summary of get All User
     * @return \App\Repositories\User\Collection|\Illuminate\Database\Eloquent\Collection|array|null
     */
    public function getUser()
    {
        try {
            $result = $this->$this->mainRepository->getUser();
            return $this->setResult($result)
                ->setCode(200)
                ->setStatus(true);
        } catch (Exception $exception) {
            return $this->exceptionResponse($exception);
        }
    }
}
