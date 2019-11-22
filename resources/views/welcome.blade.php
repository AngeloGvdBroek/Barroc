<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 200vh;
                margin: 0;
            }
            body{}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;

            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 20px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }


            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            header{
                border-bottom: dimgray 1px solid;

            }
            

            /*.m-b-md {*/
            /*    padding-bottom: 30px;*/
            /*}*/
            header{
                height: 60px;
            border-bottom: dimgrey 1px solid;
            background-color: black;}

            /*.content{ padding-top: 200px;*/
            /*    background-color: white;*/
            /*    text-align: center;}*/


            .content1{
                border-bottom: dimgrey 1px solid;
                padding-bottom: 200px;
                padding-top: 200px;
                background-image: url({{"img/coffeewallpaper.jpg"}});
                background-size: cover;

                display: block;
                text-align: center;}


            .content2{
               background: white;
                opacity: 0.6;
            }

            .content3{
                border-bottom: dimgrey 1px solid;
                padding-bottom: 200px;
                padding-top: 200px;
                background-color: white;
                text-align: center;}
            .content3{
                border-bottom: dimgrey 1px solid;
                padding-bottom: 200px;
                padding-top: 200px;
                background-color: lightgrey;
                text-align: center;}
            .content4{
                border-bottom: dimgrey 1px solid;
                padding-bottom: 200px;
                padding-top: 200px;
                background-image: url({{"img/coffeewallpaper2.jpg"}});
                background-size: cover;

                display: block;
                text-align: center;}


            .content5{
                background: white;
                opacity: 0.6;
            }
            .images1{
                display: flex;
                align-content: center;
                align-items: center;
            }
            footer{
                background-color: black;
                padding: 0px;
                margin: 0px;
            }
            footer{
                background-color: black;
                padding: 0px;
                margin: 0px;
                color: #fff;
                padding-top: 30px;
                padding-bottom: 30px;
            }
            footer ul li{
               list-style: none;
            }
            .adress-footer ul{
                padding-top: 15px;
                margin-top: 0px;
                margin-bottom: 0px;
                padding-bottom: 15px;
                background-color: black;
            }
            .contact-details-ul{
                margin-bottom: 0px;
            }
            .Contact-details-logo{
                padding-right: 50px;
               margin-top: -175px;
               text-align: right;

            }
            .Contact-details-times{
                padding-right: 50px;
                text-align: right;
            }

            .Contact-details-social{
               padding-right: 50px;
                text-align: right;
            }
        </style>
    </head>

    <header>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href=""><img src="{{ asset('img/logo.png') }}" alt="test"></a>
                </div>

                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
        @endif

        </div>

    </header>
    <body>

            <div class="content">
                <div class="content1">
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
                <div class="content4">
                    <div class="title m-b-md">
                        DIT IS DE SLOGAN
                    </div>
                    <div class="content5">
                        <div class="title m-b-md">
                            VAN BARROC INTENSE
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
    <ul>
        <li>Barroc intens</li>
        <li>Straatnaam 11</li>
        <li>4824lm</li>
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
