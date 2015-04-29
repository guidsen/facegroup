<?php namespace App\Http\Composers;

use App\Repositories\Facebook\GroupRepository;
use Illuminate\Contracts\View\View;

class GroupComposer
{
    protected $groupsRepository;

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupsRepository = $groupRepository;
    }

    public function compose(View $view)
    {
        $view->with('groups', $this->groupsRepository->all());
    }
}