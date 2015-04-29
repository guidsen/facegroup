@extends('template')

@section('content')

    <p>Gepost door: {{$message->getProperty('from')->getProperty('name')}}</p>
    <p>Message: {{$message->getProperty('message')}}</p>
    <p>Likes: {{$message->likesCount}}</p>

    <p>Reacties:</p>
    @foreach($message->comments as $comment)
        <p>Likes: {{$comment->getProperty('like_count')}} - {{$comment->getProperty('message')}}</p>
    @endforeach

@stop