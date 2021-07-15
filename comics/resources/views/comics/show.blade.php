@extends('layout.app')

@section('title', 'comic')

@section('content')
    <h1>Comic Page</h1>

        <div class="comic">
            <div class="title">
                {{ $comic['title'] }}
            </div>
            <img src="{{$comic['thumb']}}" alt="">
            <div>Price: {{ $comic['price'] }}</div>
            <p>{{ $comic['description'] }}</p>
            <div>Series: {{ $comic['series'] }}</div>
            <div>Type: {{ $comic['type'] }}</div>

            <div>
                Artists:<br>
                @foreach($comic['artists'] as $artist)
                    <span>{{$artist}}, </span>
                @endforeach
            </div>
            <div>
                Writers:<br>
                @foreach($comic['writers'] as $writer)
                    <span>{{$writer}}, </span>
                @endforeach
            </div>
        </div>

@endsection