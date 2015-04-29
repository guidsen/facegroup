<?php namespace App\Repositories\Facebook;

use Facebook\FacebookRequest;

class MessageRepository extends AbstractRepository
{
    public function get($id)
    {
        $request = new FacebookRequest($this->session, 'GET', "/{$id}");
        $response = $request->execute();

        $likes = (new FacebookRequest($this->session, 'GET', "/{$id}/likes?summary=true"))->execute();
        $comments = (new FacebookRequest($this->session, 'GET', "/{$id}/comments?summary=true"))->execute();
        $message = $response->getGraphObject();
        $message->likesCount = $likes->getGraphObject()->getProperty('summary')->getProperty('total_count');
        $message->comments = $comments->getGraphObjectList();

        return $message;
    }
}