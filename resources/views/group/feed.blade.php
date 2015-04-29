@extends('template')

@section('content')
    <div class="feed">
        @foreach($items as $item)
            <div class="row item">
                <div class="avatar">
                    <img src="http://placehold.it/45x45">
                </div>
                <div class="content">
                    <span class="creator">{{$item->getProperty('from')->getProperty('name')}}</span>

                    <p>
                        <a href="{{route('message.show', ['id' => $item->getProperty('id')])}}" class="excerpt">{{$item->excerpt}}</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@stop