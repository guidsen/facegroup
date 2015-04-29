<?php namespace App\Repositories\Facebook;

use Facebook\FacebookRequest;
use Illuminate\Support\Str;

class GroupRepository extends AbstractRepository
{
    public function all()
    {
        $request = new FacebookRequest($this->session, 'GET', '/me/groups');
        $response = $request->execute();
        return $response->getGraphObjectList();
    }

    public function feed($id)
    {
        $request = new FacebookRequest($this->session, 'GET', "/{$id}/feed");
        $response = $request->execute();

        $feed = collect($response->getGraphObjectList());
        $feed->each(function ($item) {
            //$creatorId = $item->getProperty('from')->getProperty('id');
            //$response = (new FacebookRequest($this->session, 'GET', "/{$creatorId}/picture"))->execute();
            $item->excerpt = Str::words($item->getProperty('message'), 15);
            //$item->creator = $response->getGraphObject()->getProperty('url');
        });

        return $feed;
    }
}