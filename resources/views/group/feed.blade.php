@extends('template')

@section('content')
    <div class="group">
        54 total posts in <span class="name">Young Creators</span>
    </div>
    <div class="add">
        <button>Create a new post</button>
    </div>
    <div class="feed">
        @foreach($items as $item)
            <div class="row item">
                <div class="profile">
                    <div class="from">
                        <img src="http://placehold.it/50x50"> <span class="posted-by">Posted by</span> <span class="name">{{$item->getProperty('from')->getProperty('name')}}</span>
                    </div>
                    <div class="when">
                        9 hours ago
                    </div>
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
                        <div class="profile small">
                            <div class="from">
                                <img src="http://placehold.it/50x50"> <span class="name">Guido Schmitz</span> said: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis turpis a scelerisque vehicula. Duis eget placerat metus, at condimentum libero.
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="profile small">
                            <div class="from">
                                <img src="http://placehold.it/50x50"> <span class="name">Jane Doe</span> said: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis turpis a scelerisque vehicula. Duis eget placerat metus, at condimentum libero. Sed id orci commodo, tempor neque non, mattis tortor.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop