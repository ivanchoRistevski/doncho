@extends('layouts.main')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">sup'</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="list-group">
                            <div class="list-group-item">
                                <a href="/posts/create">Create new Post!</a>
                            </div>
                            <div class="list-group-item">
                                <a href="/posts/mine">Full list of my posts!</a>
                            </div>

                        </div>

                        <hr>

                        <div class="list-group">
                            <div class="list-group-item">
                                <a href="/categories/index">Full list of categories!</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>

@endsection
