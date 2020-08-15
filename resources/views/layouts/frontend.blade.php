<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes-frontend.style')

    <title>Arconesia</title>
</head>

<body>

    <div class="preload">
        <div class="spinner-grow text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    @include('includes-frontend.navbar')

    @yield('content')

    @include('includes-frontend.footer')

    @include('includes-frontend.script')

</body>

</html>