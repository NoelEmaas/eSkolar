<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>eSkolar</title>
        @include('bootstrap')
        <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}" />
    </head>
<body>
    <x-sign-in-form />
    <x-sign-up-form />

    <x-header/>

    <main>
        @yield('content')
    </main>

    <x-footer/>
</body>
</html>