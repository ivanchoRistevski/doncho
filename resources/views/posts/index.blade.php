@extends('layouts.main')
@section('content')

    @foreach($p1 as $post1)

        @if($loop->first)

            <div class="col-md-12" >

                <a href="{{ $post1->path() }}" style="text-decoration: none;">

                    <article class="row top-article">
                        <div class="img-wrapper-big col-sm-6">
                            <img src="{!! asset('images/' . $post1->featured_photo )  !!}"/>
                        </div>
                        <h4 class="col-sm-6" >{{ $post1->title }}</h4>

                        <p class="col-sm-push-6 " >{{ $post1->description }}</p>

                    </article>

                </a>

            </div>
         @else

            <br />

                <div class="col-sm-4">
                    <article class="row medium-boxes">
                        <div class="img-wrapper-medium">
                            <img src="{!! asset('images/' . $post1->featured_photo )  !!}" />
                        </div>
                            <h4 class="post-small-title">{{ $post1->title }}</h4>
                            <p class="post-description-small">{{ $post1->description }}</p>
                    </article>

                </div>

         @endif

    @endforeach


    @foreach (Allutomotive\Category::all() as $category)
        @if($category->posts()->count() != 0)
            <div class="row bottom-row">
            <p> {{$category->name}}</p>

            @php
            $i =0;
            @endphp

        @foreach($p2 as $post2)

            @php

                $check = true;

            @endphp

            @foreach($p1 as $post1)

                @if($post2 == $post1)

                    {{ $check = false }}

                @endif

            @endforeach

            @if($check == true && $post2->category == $category && $i < 3)

                <div class="col-sm-4">

                    <a href="{!!  $post2->path() !!}" style="text-decoration: none; color: #82c9ff">

                        <article class="row med-article-bottom">
                            <div class="small-img-wrapper">
                                <img  class="col-sm-6" src="{!! asset('images/' . $post2->featured_photo )  !!}"/>
                            </div>
                            <h4 class="col-sm-6">{{ $post2->title }}</h4>

                            <p class="col-sm-push-6" style="margin-top: 50px;">{{ $post2->description }}</p>

                        </article>

                    </a>

                </div>

                @php
                $i++;
                @endphp

            @endif

        @endforeach

        </div>

        @endif

    @endforeach

@endsection
