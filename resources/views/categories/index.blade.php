@extends('layouts.app')


@section('content')


    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                @foreach(Allutomotive\Post::all() as $post)

                    @if($post->category == $category)



                        <a href="{{ $post->path() }}" style="text-decoration: none; color: #ff6666">

                            <article style="background-color: #F5E6E7">

                                <div class="col-sm-8">

                                    <h4 class="title" style="background-color:#EFDBDD ;">{{ $post->title }}</h4>

                                </div>

                                <div class="row p-1">

                                    <div class="col-sm-7">

                                        <img  src="{!! asset('images/' . $post->featured_photo )  !!}" width="400" height="300" />

                                    </div>

                                    <div class="col-sm-4 ">

                                        <p class="text-info" style="margin-top: 50px;">{{ $post->description }}</p>

                                    </div>


                                </div>

                            </article>

                        </a>

                    @endif

                @endforeach

                <div class="list-group-item">

                    <a href="/categories/create">Create a new Category!</a>

                </div>

            </div>

        </div>

    </div>

@endsection