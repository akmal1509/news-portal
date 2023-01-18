<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use App\Services\Base\BaseService;

class UserService extends BaseService
{

    /**
     * Summary of mainRepository
     * @var mixed
     */
    protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }
}
