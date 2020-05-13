@extends('layout.default')

@section('content')
    <!-- Heading -->
    <div class="col-sm-12 mt-5">
        <h1 class="text-uppercase"
            style="font-size: 32px;">
            Stripe Integration
        </h1>
        <p class="">
            A fully working payment form, designed by
            <a href="https://www.rossedlin.com/" target="_blank">Ross Edlin.</a><br/>
            If you like it and want it on your site,
            <a href="https://www.rossedlin.com/hire/" target="_blank">contact / hire me here.</a>
        </p>
    </div>
    <!-- End Heading -->

    <hr/>

    <!-- Stripe Payment -->
    <div class="col-sm-12 mt-5">
        <div class="row">
            @include('stripe.checkout')
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
@stop