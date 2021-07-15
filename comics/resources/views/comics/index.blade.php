@extends('layout.app')

@section('title', 'comics')

@section('content')
    <h1>Comics Page</h1>

    <div class="comics">
    @foreach($comics as $comic)
        <div class="comic">
            <div class="title">
                {{ $comic['title'] }}
            </div>
            
            <img src="{{$comic['thumb']}}" alt="">
            s
        </div>
    @endforeach
    </div>
@endsection