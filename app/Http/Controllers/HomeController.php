<?php namespace App\Http\Controllers;

use App\Services\FacegroupRedirectLoginHelper;
use Facebook\FacebookSession;

class HomeController extends Controller
{
    const REDIRECT_URL = 'http://facegroup.dev:8000/auth', SESSION_NAME = 'currentUser';

    public function index()
    {
        $helper = new FacegroupRedirectLoginHelper(static::REDIRECT_URL);
        if ($this->session->has(static::SESSION_NAME))
            return view('index');

        return view('index')->with(['loginUrl' => $helper->getLoginUrl()]);
    }

    public function auth()
    {
        $helper = new FacegroupRedirectLoginHelper(static::REDIRECT_URL);

        if ($fbSession = $helper->getSessionFromRedirect()) {
            $this->session->put(static::SESSION_NAME, $fbSession);
            return redirect()->route('home');
        }
    }

    public function logout()
    {
        $this->session->forget(static::SESSION_NAME);
        return redirect()->route('home');
    }
}