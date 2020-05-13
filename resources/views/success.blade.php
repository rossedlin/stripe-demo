@extends('layout.default')

@section('content')
    <!-- Heading -->
    <div class="col-sm-12 mt-5">
        <h1 class="text-uppercase"
            style="font-size: 32px;">
            Stripe Integration
        </h1>
        <p class="">
            Congratulation, you have successfully made your Stripe Payment.<br>
            You can login with these details to see your payment.
        </p>
    </div>
    <!-- End Heading -->

    <!-- Card Details -->
    <div class="col-sm-12 mt-5">
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
@stop