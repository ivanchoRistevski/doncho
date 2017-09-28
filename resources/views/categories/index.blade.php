@extends('layouts.app')


@section('content')


    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                @foreach($categories as $category)
                    <div class="list-group">

                        <div class="list-group-item">

                            <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                        </div>

                    </div>

                @endforeach

                <div class="list-group-item">

                    <a href="/categories/create">Create a new Category!</a>

                </div>

            </div>

        </div>

    </div>

@endsection