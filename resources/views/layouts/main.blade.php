<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')

</head>
<body>

<div class="container">

    <header class="row">

        @include('includes.banner')

        @include('includes.nav')

    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">

        @include('includes.footer')

    </footer>



</div>

    @include('includes.scripts')

</body>
</html>