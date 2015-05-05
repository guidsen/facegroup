@extends('template')

@section('content')

    <div class="post">
        <div class="profile">
            <div class="from">
                <img src="http://placehold.it/50x50"> <span class="posted-by">Posted by</span> <span class="name">{{$message->getProperty('from')->getProperty('name')}}</span>
            </div>
            <div class="when">
                9 hours ago
            </div>
        </div>
        <div class="message">
            {{$message->getProperty('message')}}
        </div>
        <div class="social">
            This post has 8 comments and {{$message->likesCount}} likes<br />
            <button><i class="fa fa-thumbs-up"></i> Comment</button><button><i class="fa fa-thumbs-up"></i> Like</button>
            <textarea name="comment" class="comment" spellcheck="false">Write a comment...</textarea>
        </div>
    </div>

    @foreach($message->comments as $comment)
        <div class="comment">
            <div class="profile small">
                <div class="from">
                    <img src="http://placehold.it/50x50"> <span class="posted-by">Posted by</span> <span class="name">{{$message->getProperty('from')->getProperty('name')}}</span>
                </div>
                <div class="when">
                    9 hours ago
                </div>
            </div>
            <div class="content">
                {{$comment->getProperty('message')}}
            </div>
            Likes: {{$comment->getProperty('like_count')}}
        </div>
    @endforeach

@stop