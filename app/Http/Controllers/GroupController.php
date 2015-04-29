<?php  namespace App\Http\Controllers; 

use App\Repositories\Facebook\GroupRepository;

class GroupController extends Controller
{
    public function show(GroupRepository $groupRepository, $id)
    {
        return view('group.feed')->withItems($groupRepository->feed($id));
    }
}