<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository
{

    /**
     * Summary of get all User
     * @return Collection|null
     */
    public function getUser();
}
