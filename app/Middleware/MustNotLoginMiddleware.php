<?php

namespace Project\Middleware;

use Project\App\View;
use Project\Config\Database;
use Project\Service\SessionService;
use Project\Repository\UserRepository;
use Project\Repository\SessionRepository;



class MustNotLoginMiddleware implements Middleware
{
    private SessionService $sessionService;

    public function __construct()
    {
        $sessionRepository = new SessionRepository(Database::getConnection());
        $userRepository = new UserRepository(Database::getConnection());
        $this->sessionService = new SessionService($sessionRepository, $userRepository);
    }

    function before(): void
    {
        $user = $this->sessionService->current();
        
        if ($user != null) {
            if($user->status == 'admin') {
                View::redirect('/portal/admin');
            }
            if ($user->status == 'user') {
                View::redirect('/portal/user');
            }
        }
    }
}
