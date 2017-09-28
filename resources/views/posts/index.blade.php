@extends('layouts.main')

@section('content')

            <div class="col-md-8 col-md-offset-2">



                @foreach($posts as $post)

                    <div class="col-lg-offset-1 left">

                        <a href="{{ $post->path() }}" style="text-decoration: none; color: #ff6666">

                            <article>

                                <h4 class="title">{{ $post->title }}</h4>

                                <p class="text-info">{{ $post->description }}</p>


                                    <div class="col-lg-4">

                                        <img  src="{!! asset('images/' . $post->image )  !!}" width="620" height="348.75" />

                                    </div>

                                <div class="col-lg-offset-5">



                                </div>

                            </article>
                        </a>


                    </div>
                @endforeach


            </div>


@endsection
