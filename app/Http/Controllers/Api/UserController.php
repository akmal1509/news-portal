<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\User\UserRepository;
use App\Services\Test\TestService;
use App\Services\User\UserService;
use App\Traits\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{

    use Response;
    private $userService;

    private $userRepository;

    public function __construct(UserService $userService, UserRepository $userRepository)
    {
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    /**
     * Summary of Get All User
     * @return mixed
     */
    public function index()
    {
        $result = $this->userService->all()->toJson();
        return new UserResource($result);
    }

    public function store(Request $request)
    {
        $created = $this->userService->create($request->all())->toJson();
        new UserResource($created['data']);
        return $this->storeResponse($created);
    }
}
