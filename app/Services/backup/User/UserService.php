<?php

namespace App\Services\User;

use LaravelEasyRepository\BaseService;

interface UserService extends BaseService
{

    /**
     * Summary of get all User
     * @return Collection|null
     */
    public function getUser();
}
