<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthStoreRequest;
use App\Http\Services\AuthService;
use App\Http\Services\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected ResponseService $responseService;
    protected AuthService $authService;

    public function __construct(ResponseService $responseService, AuthService $authService)
    {
        $this->authService = $authService;
        $this->responseService = $responseService;
    }

    public function register(AuthStoreRequest $request): JsonResponse
    {
        try {
            $user = $this->authService->createUser($request->validated());
            $accessToken = $user->createToken('userSignIn')->plainTextToken;

            return response()->json([
                'user' => $user,
                'access_token' => $accessToken,
            ]);

        } catch (\Exception $exception) {
            Log::error('An Error occurred while creating user. Error: ' . $exception->getMessage());
            return $this->responseService->errorResponse('An error occurred while creating user');

        }
    }

    public function login(AuthLoginRequest $request): JsonResponse
    {
        try {
            $user = $this->authService->attemptLogin($request);
            $accessToken = $user->createToken('userSignIn')->plainTextToken;

            return response()->json([
                'user' => $user,
                'access_token' => $accessToken,
            ]);

        } catch (\Exception $exception) {
            Log::error('An Error occurred while trying to login. Error: ' . $exception->getMessage());
            return $this->responseService->errorResponse('An error occurred while trying to login');

        }
    }
}
