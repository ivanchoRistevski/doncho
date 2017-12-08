@extends('layouts.main')
@section('content')


    <h5 class="title" style="background-color:#EFDBDD ;">{{ $post->title }}</h5>


    <p class="text-info" style="margin-top: 50px;">{{ $post->description }}</p>

    {{--golema slika--}}

    <div class="image-post">
        <img  src="{!! asset('images/' . $post->featured_photo )  !!}" width="400" height="300" />
    </div>


    {{--telo na postot celosen text so sliki--}}

    <p> {{ $post->body }}</p>

@endsection