<?php namespace App\Http\Controllers;

use App\Repositories\Facebook\MessageRepository;
use Facebook\FacebookRequest;

class MessageController extends Controller
{
    public function show(MessageRepository $messageRepository, $id)
    {
        return view('message.show')->withMessage($messageRepository->get($id));
    }
}