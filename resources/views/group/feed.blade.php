@extends('template')

@section('content')
    <div class="group-title">
        54 total posts in <strong>Young Creators</strong>
        <button class="btn btn-primary pull-right">Create a new post</button>
    </div>
    <div class="feed">
        @foreach($items as $item)
            <div class="row item">
                <div class="profile">
                    <img class="avatar" src="http://placehold.it/60x60">
                    <span class="name">{{$item->getProperty('from')->getProperty('name')}}</span>
                    <span class="date"><i class="fa fa-clock-o"></i>9 hours ago</span>
                </div>
                <div class="content">
                    {{$item->excerpt}}
                </div>
                <div class="social">
                    <i class="fa fa-thumbs-up like"></i>
                    <i class="fa fa-star favorite"></i>
                    <span class="total">This post has 8 comments and 3 likes</span>
                    <a href="{{route('message.show', ['id' => $item->getProperty('id')])}}">View all comments</a>
                </div>
                <div class="comments">
                    <div class="comment">
                        <img class="avatar-sm" src="http://placehold.it/50x50">
                        <div class="message">
                            <strong>Guido Schmitz said:</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis turpis a
                            scelerisque vehicula. Duis eget placerat metus, at condimentum libero.
                        </div>
                    </div>
                    <div class="comment">
                        <img class="avatar-sm" src="http://placehold.it/50x50">
                        <div class="message">
                            <strong>Jane Doe said:</strong>
                            Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis turpis a
                            scelerisque
                            vehicula. Duis eget placerat metus, at condimentum libero. Sed id orci commodo,
                            tempor
                            neque non, mattis tortor.
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop