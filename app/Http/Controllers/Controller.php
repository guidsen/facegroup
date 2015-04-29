<?php namespace App\Http\Controllers;

use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
        $this->registerComposers();
    }

    public function registerComposers()
    {
        View::composer("*", function ($view) {
            if ($this->session->has('currentUser'))
                $view->with('groups', app('App\Repositories\Facebook\GroupRepository')->all());
        });

        View::composer("*", function ($view) {
            if ($this->session->has('currentUser'))
                $view->with('user', app('App\Repositories\Facebook\UserRepository')->loggedUser());
        });
    }
}
