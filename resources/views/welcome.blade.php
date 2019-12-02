<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <!-- Styles -->

    </head>

    <header>

        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href=""><img src="{{ asset('img/logo.png') }}" alt="test"></a>
                    <a href="{{ url('/products') }}" style="vertical-align: top">producten</a>
                </div>

                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>


                    @endauth
                </div>
        @endif

        </div>

    </header>
    <body>

            <div class="content">
                <div class="content1" style="background-image: url({{"img/coffeewallpaper.jpg"}});">
                <div class="title m-b-md">
                    Barroc
                </div>
                    <div class="content2">
                        <div class="title m-b-md">
                            INTENSE
                        </div>

                </div>
            </div>
                <div class="content3">
                    <div class="images1">
                      <img class="imagetest1" src="{{ asset('img/coffee1.jpg') }}" alt="test" width="500px">
                        <img class="imagetest2" src="{{ asset('img/coffee2.jpg') }}" alt="test1" width="500px">
                        <img class="imagetest3" src="{{ asset('img/coffee3.jpg') }}" alt="test2" width="500px" height="500">

                    </div>
                </div>

            </div>
            <div class="content">
                <div class="content4" style="background-image: url({{"img/coffeewallpaper2.jpg"}});">
                    <div class="title m-b-md">

                        INTENSE COFFIE
                    </div>
                    <div class="content5">
                        <div class="title m-b-md">
                            BARROC INTENSE
                        </div>

                    </div>



        </div>
    </body>
<footer>
<div class="adress-footer">
    <ul>
        <li>Barroc intens</li>
        <li>Straatnaam 11</li>
        <li>4824lm</li>
    </ul>
</div>
    <div class="Contact-details">
        <br>
    <ul>
        <a href="{{url('contactform')}}" class="button">offerte aanvragen? <mark class="barroc_yellow">klik hier</mark></a>
    </ul>
    </div>
    <div class="Contact-details-logo">
        <a href=""><img src="{{ asset('img/logo.png') }}" alt="test"></a>
    </div>
    <div class="Contact-details-times">
        <ul>
            <li>Monday till friday: 9am/5pm</li>
            <li>Saturday: 10am/3pm</li>
            <li>sunday: closed</li>
            
        </ul>

    </div>
    <div class="Contact-details-social">
        <ul class="contact-details-ul">
            <li>Twitter</li>
            <li>Facebook</li>
            <li>Reddit</li>
        </ul>
    </div>

</footer>
</html>
