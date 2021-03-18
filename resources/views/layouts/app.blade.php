<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    <div class="header">
        <div class="header-content">
            <ul class="global-actions">
                <li>
                    <span class="selected-dot"></span>
                    <div class="global-actions-button-content"><span id="home-icon"></span>
                        <p>Home</p>
                    </div>
                    <div class="button-bottom-highlight"></div>
                </li>

                <li>
                    <div class="global-actions-button-content"><span id="notifications-icon"></span>
                        <p>Notifications</p>
                    </div>
                    <div class="button-bottom-highlight-inactive"></div>
                </li>

                <li>
                    <div class="global-actions-button-content"><span id="messages-icon"></span>
                        <p>Messages</p>
                    </div>
                    <div class="button-bottom-highlight-inactive"></div>
                </li>
            </ul>

            <button class="compose-tweet" data-toggle="modal" data-target="#create_tweet_modal">
                <div class="wrap">
                    <span></span>
                    <p>Tweet</p>
                </div>
            </button>

            <img src="/images/avatars/1.png" alt="" class="profile-picture-small">

            <div class="search">
                <input type="text" placeholder="Search Twitter" />
                <p><span></span></p>
            </div>

            <img src="images/logo.png" alt="" class="logo" />
        </div>
    </div>
    <br>
    <br>
    <br>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    @yield('js')

</body>
</html>
