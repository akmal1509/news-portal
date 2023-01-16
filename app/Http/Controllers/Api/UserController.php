<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Repositories\User\UserRepository;
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
        $result = $this->userRepository->with(['roles'])->all();
        // $result = $this->userRepository->all();
        return $this->successResponse(UserResource::collection($result));
        // return response()->json([
        //     "data" => UserResource::collection($result)
        // ]);
        // return UserResource::collection($result);
    }

    // public function create(UserStoreRequest $request, UserService $userService)
    // {
    //     $created = $userService->create($request->all());
    //     return
    // }
}
