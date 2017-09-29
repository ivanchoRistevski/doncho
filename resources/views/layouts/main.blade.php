<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')

</head>
<body>

<div class="container">

    <header class="row" style="background: black; max-height:180px">

        <banner class="jumbotron">

          @include('includes.banner')

        </banner>

        <nav class="navbar navbar-default navbar-static-top">

          @include('includes.nav')

        </nav>
    </header>

    <div id="main" class="row">

        <div id="content" class="col-sm-9">

            @yield('content')

        </div>

        <div id="sidebar" class="col-sm-3">

            @include('includes.sidebar')

        </div>



    </div>

    <footer class="row">

        @include('includes.footer')

    </footer>



</div>

    @include('includes.scripts')

</body>
</html>