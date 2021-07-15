@extends('layout.app')

@section('title', 'comic')

@section('content')
    <h1>Comic Page</h1>

        <div class="comic">
            <div class="title">
                {{ $comic['title'] }}
            </div>
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        
@endsection