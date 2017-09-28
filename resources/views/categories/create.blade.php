@extends('layouts.app')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

    <form method="POST" action="/categories"  >

        {{ csrf_field() }}

        <div class="form-group">

            <label for="name">Category name:</label>

            <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ old('name') }}">

        </div>

        <div class="form-group">

            <label for="importance">is this important:</label>

            <input type="number" class="form-control" id="importance" placeholder="importance" name="importance" value="{{ old('importance') }}">

        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>
                </div>
            </div>
        </div>
    </div>
@endsection