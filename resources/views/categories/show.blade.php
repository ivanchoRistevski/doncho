@extends('layouts.main')
@section('content')

        <div class="row">

            <div class="col-md-4 col-md-offset-2">

                @foreach($posts as $post)




                        <div class="col-sm-4">


                        <a href="{{ $post->path() }}" style="text-decoration: none; color: #ff6666">

                            <article style="background-color: #F5E6E7">

                                <div class="col-sm-8">

                                    <h4 class="title" style="background-color:#EFDBDD ;">{{ $post->title }}</h4>

                                </div>

                                    <div class="col-sm-6">
                                        <div class="image-post">
                                            <img  src="{!! asset('images/' . $post->featured_photo )  !!}" width="400" height="300" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4 ">

                                        <p class="text-info" style="margin-top: 50px;">{{ $post->description }}</p>

                                    </div>

                            </article>

                        </a>

                        </div>



                @endforeach

            </div>

        </div>
@endsection