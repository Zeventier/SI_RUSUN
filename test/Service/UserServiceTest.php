<?php

namespace Project\Service;

use Project\Config\Database;
use PHPUnit\Framework\TestCase;
use Project\Model\UserRegisterRequest;
use Project\Repository\UserRepository;
use Project\Repository\SessionRepository;

class UserServiceTest extends TestCase
{
    private UserService $userService;
    private UserRepository $userRepository;
    private SessionRepository $sessionRepository;

    protected function setUp(): void
    {
        $connection = Database::getConnection();
        $this->userRepository = new UserRepository($connection);
        $this->userService = new UserService($this->userRepository);
        $this->sessionRepository = new SessionRepository($connection);

        $this->sessionRepository->deleteAll();
        $this->userRepository->deleteAll();
    }

    public function testRegisterSuccess()
    {   
        $request = new UserRegisterRequest();
        $request->username = "irvan";
        $request->password = "rahasia";
        $request->status = "user";

        $response = $this->userService->register($request);

        self::assertEquals($request->username, $response->user->username);
        self::assertNotEquals($request->password, $response->user->password);
        self::assertEquals($request->status, $response->user->status);

        self::assertTrue(password_verify($request->password, $response->user->password));
    }
}