<!DOCTYPE html>
<html lang="">
    <head>
        @include('includes.head')
        @section('css_app')
        @show
    </head>

    <body>
        <!-- Header -->
        @include('includes.header')

        <!-- Header -->
        @include('includes.banner_header')

        <!-- Main navbar -->
        @include('includes.navbar')

        <!-- content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- footer -->
        @include('includes.footer')

        @section('js_app')
        @show
    </body>
</html>
