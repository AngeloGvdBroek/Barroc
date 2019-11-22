<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
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
                    <a href="{{ route('login') }}">Logout</a>
                @endauth
            </div>
        @endif

    </div>

</header>

<main>
    <a href="">Klanten Beheer Pagina</a>
    <a href=""></a>
    <a href=""></a>
</main>

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

</body>
</html>
