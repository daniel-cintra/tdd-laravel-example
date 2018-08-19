<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

        <div class="container content">

            @if($itens->count())

                @foreach($itens->chunk(3) as $chunk)

                    <div class="row gallery__row">

                        @foreach($chunk as $item)

                            @include('_item')

                        @endforeach

                    </div>

                @endforeach

            @else

                <p class="alert alert-info">
                    No images here...
                </p>

            @endif

        </div>
    </body>
</html>
