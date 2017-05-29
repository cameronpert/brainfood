<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Blog Template for Bootstrap</title>

        <link rel="stylesheet" href="/css/main.css" crossorigin="anonymous">

        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body>
        
        @include('layout.nav')

        <div class="blog-header">
            <div class="container">

                <h1 class="blog-title">The Bootstrap Blog</h1>

                <p class="lead blog-description">An example blog template built with Bootstrap.</p>

            </div>
        </div>

        <div class="container">
            <div class="row">

                @yield('content')

                @include('layout.sidebar')

            </div>
        </div>

        <hr>

        @include('layout.footer')

    </body>

</html>





















