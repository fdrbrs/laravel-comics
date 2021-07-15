@extends('layout.app')

@section('title', 'comics')

@section('content')
    <h1>Comics Page</h1>

    <div class="comics">
    @foreach($comics as $index => $comic)
        <div class="comic">
            <a href="{{route('comic', ['id' => $index])}}">
            <div class="title">
                {{ $comic['title'] }}
            </div>
            
            <img src="{{$comic['thumb']}}" alt="">
            </a>
            
            
        </div>
    @endforeach
    </div>
@endsection