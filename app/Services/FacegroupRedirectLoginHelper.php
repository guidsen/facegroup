<?php namespace App\Services;

use Facebook\FacebookRedirectLoginHelper;
use Illuminate\Support\Facades\Session;

class FacegroupRedirectLoginHelper extends FacebookRedirectLoginHelper
{
    const SESSION_KEY = 'state';

    protected function storeState($state)
    {
        Session::put(static::SESSION_KEY, $state);
    }

    protected function loadState()
    {
        return $this->state = Session::get(static::SESSION_KEY);
    }
}