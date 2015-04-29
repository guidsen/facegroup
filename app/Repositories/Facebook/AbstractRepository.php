<?php namespace App\Repositories\Facebook;

use Illuminate\Session\SessionManager;

abstract class AbstractRepository
{
    const SESSION_NAME = 'currentUser';
    protected $session;

    public function __construct(SessionManager $sessionManager)
    {
        $this->session = $sessionManager->get(static::SESSION_NAME);
    }
}