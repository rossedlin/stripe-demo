<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stripe</title>

    <link href="<?= \Edlin\Core\Utils::addVersionToFile("/css/app.css"); ?>" rel="stylesheet">
    <script src="<?= \Edlin\Core\Utils::addVersionToFile("/js/app.js"); ?>"></script>

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
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>


        <!-- Heading -->
        <div class="col-sm-12 mt-5">
            <h1 class="text-uppercase"
                style="font-size: 32px;">
                Stripe Integration
            </h1>
            <p class="">
                A fully working payment form, designed by me of course!<br/>
                If you like it and want it on your site, <a href="https://www.rossedlin.com/contact" target="_blank">contact
                    me!</a>
            </p>
        </div>
        <!-- End Heading -->

        <hr/>

        <!-- Stripe Payment -->
        <div class="col-sm-12 mt-5">
            <div class="row">
                @include('stripe.custom')
            </div>
        </div>
        <!-- End Stripe Payment -->

        <!-- Card Details -->
        <div class="col-sm-12 mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                        <tr>
                            <th class="hidden-sm-down">#</th>
                            <th>Login Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="hidden-sm-down">Link</td>
                            <td><a href="https://dashboard.stripe.com/login"
                                   target="_blank">https://stripe.com/login</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="hidden-sm-down">Username</td>
                            <td>demo@rossedlin.com</td>
                        </tr>

                        <tr>
                            <td class="hidden-sm-down">Password</td>
                            <td>Password1234!!!</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-6">
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                        <tr>
                            <th class="hidden-sm-down">#</th>
                            <th>Test Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="hidden-sm-down">Card</td>
                            <td>4242 4242 4242 4242</td>
                        </tr>

                        <tr>
                            <td class="hidden-sm-down">Expiry</td>
                            <td>12 / 32</td>
                        </tr>

                        <tr>
                            <td class="hidden-sm-down">CVC</td>
                            <td>123</td>
                        </tr>

                        <tr>
                            <td class="hidden-sm-down">Zip</td>
                            <td>12345</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
