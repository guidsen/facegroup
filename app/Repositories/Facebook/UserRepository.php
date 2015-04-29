<?php namespace App\Repositories\Facebook;

use Facebook\FacebookRequest;
use Facebook\GraphUser;

class UserRepository extends AbstractRepository
{
    public function loggedUser()
    {
        $response = (new FacebookRequest($this->session, 'GET', '/me'))->execute();
        $avatar = (new FacebookRequest($this->session, 'GET', '/me/picture?redirect=false'))->execute();
        $data = $response->getGraphObject(GraphUser::className());
        $data->avatar = $avatar->getGraphObject()->getProperty('url');

        return $data;
    }
}