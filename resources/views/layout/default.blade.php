<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 2020-05-13
 * Time: 13:18
 *
 * @var string $cssVersion
 * @var string $jsVersion
 */
?>

        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stripe</title>

    <link href="<?= config('app.url') . \Edlin\Core\Utils::addVersionToFile("/css/app.css", $cssVersion); ?>" rel="stylesheet">
    <script src="<?= config('app.url') . \Edlin\Core\Utils::addVersionToFile("/js/app.js", $jsVersion); ?>"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Stripe v3 -->
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row text-center">

        <div class="col-sm-12 mt-5 mb-5">
            <div class="links">
                <a href="https://www.rossedlin.com/" target="_blank">Home</a>
                <a href="https://www.rossedlin.com/portfolio/" target="_blank">Portfolio</a>
                <a href="https://www.rossedlin.com/linkedin" target="_blank">LinkedIn</a>
                <a href="https://github.com/rossedlin/stripe-demo/blob/master/app/Http/Controllers/StripeController.php"
                   target="_blank">GitHub (Source Code)</a>
            </div>
        </div>

        <div class="col-sm-12 mt-5 mb-5">
            <div class="row text-center">
                @yield('content')
            </div>
        </div>

    </div>
</div>
</body>
</html>