<?php

namespace Project\Service;

use Project\Domain\User;
use Project\Config\Database;
use Project\Model\UserEditRequest;
use Project\Model\UserLoginRequest;
use Project\Model\UserLoginResponse;
use Project\Model\UserRegisterRequest;
use Project\Repository\UserRepository;
use Project\Model\UserRegisterResponse;
use Project\Exception\ValidationException;

class UserService {
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }



    public function login(UserLoginRequest $request): UserLoginResponse
    {
        $this->validateUserLoginRequest($request);

        $user = $this->userRepository->findById($request->username);
        if ($user == null) {
            throw new ValidationException("Username or password is wrong");
        }

        if (password_verify($request->password, $user->password)) {
            $response = new UserLoginResponse();
            $response->user = $user;
            return $response;
        } else {
            throw new ValidationException("Username or password is wrong");
        }
    }

    private function validateUserLoginRequest(UserLoginRequest $request)
    {
        if (
            $request->username == null || $request->password == null ||
            trim($request->username) == "" || trim($request->password) == ""
        ) {
            throw new ValidationException("Username, Password can not blank");
        }
    }

    public function register(UserRegisterRequest $request): UserRegisterResponse
    {
        $this->validateUserRegistrationRequest($request);

        try {
            Database::beginTransaction();
            $user = $this->userRepository->findById($request->username);
            if ($user != null) {
                throw new ValidationException("Username already exists");
            }

            $user = new User();
            $user->username = $request->username;
            $user->password = password_hash($request->password, PASSWORD_BCRYPT);
            $user->status = $request->status;

            $this->userRepository->save($user);

            $response = new UserRegisterResponse();
            $response->user = $user;

            Database::commitTransaction();
            
            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function editUser($username, UserEditRequest $request)
    {
        try {
            Database::beginTransaction();

            $user = new User();
            $user->username = $username;
            $user->password = password_hash($request->password, PASSWORD_BCRYPT);
            $user->status = $request->status;

            $this->userRepository->update($user);

            Database::commitTransaction();

            return $user;
            
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    private function validateUserRegistrationRequest(UserRegisterRequest $request)
    {
        if (
            $request->username == null || $request->password == null || $request->status == null ||
            trim($request->username) == "" || trim($request->password) == "" || trim($request->status) == ""
        ) {
            throw new ValidationException("Username, Password can not blank");
        }
    }
}