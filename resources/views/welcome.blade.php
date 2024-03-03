<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .border-gray-200 {
        --tw-border-opacity: 1;
        border-color: rgb(229 231 235 / var(--tw-border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
    }

    .text-gray-300 {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity))
    }

    .text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-700 {
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity))
    }

    .text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity))
        }

        .dark\:bg-gray-900 {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity))
        }

        .dark\:border-gray-700 {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity))
        }

        .dark\:text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .dark\:text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .bg {
            /* The image used */
            background-image: url("{{ url('images/fondo.png') }}");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body>

    <div class="relative  items-top min-h-screen bg bg-gray-100 dark:bg-gray-900  py-4 sm:pt-0">

        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent  ">
            <img src="{{ url('images/gamer_fest.png') }}" width="100" height="100">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-end">
                        @if (Route::has('login'))
                        @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container">
            <br><br><br><br>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ url('images/call_of_duty.jpg') }}" height="600"
                            alt="Primer juego">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ url('images/fall_guys.jpg') }}" height="600"
                            alt="Segundo juego">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ url('images/lol.jpg') }}" height="600" alt="Tercer juego">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br><br><br>
        <center>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-white bg-dark mb-3" style="width: 25rem; ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2120238450116!2d-78.58828638569456!3d-0.9988702992713584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e3fb9755f%3A0x22fe7f63301b5fee!2sESPE%20-%20Campus%20Belisario%20Quevedo!5e0!3m2!1ses!2sec!4v1669608261033!5m2!1ses!2sec"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="card-body">
                            <h3 class="card-text">Ubicacion del Gamer Fest</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-dark mb-3" style="width: 25rem;">
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/logi.png') }}" width="50" height="50"
                                        alt="Discord">
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/rog.png') }}" width="50" height="50"
                                        alt="Discord">
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/corsair.png') }}" width="70"
                                        height="70" alt="Discord">
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/msi.png') }}" width="70" height="70"
                                        alt="Discord">
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text">Patrocinadores</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-dark mb-3" style="width: 25rem;">
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/discord.png') }}" width="50"
                                        height="50" alt="Discord">
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/twitch.png') }}" width="50"
                                        height="50" alt="Twitch">
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/youtube.png') }}" width="50"
                                        height="50" alt="Youtube">
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/instagram.png') }}" width="50"
                                        height="50" alt="Instagram">
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/facebook.png') }}" width="50"
                                        height="50" alt="Facebook">
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button style="BORDER: 0px; background-color: transparent">
                                    <img class="card-btn-top" src="{{ url('images/twitter.png') }}" width="50"
                                        height="50" alt="Twitter">
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text">Redes oficiales</h3>
                        </div>
                    </div>
                </div>
            </div>
        </center>


    </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>