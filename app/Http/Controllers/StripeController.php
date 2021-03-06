<?php

namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 17:35
 *
 * Class Stripe
 *
 * @package App\Http\Controllers
 */
class StripeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        \Stripe\Stripe::setApiKey(self::getSecretKey());

        /**
         * @var \Stripe\Checkout\Session $session
         */
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [
                [
                    'name'        => 'Stripe Demo from Ross Edlin (No real money is transferred)',
                    'description' => "Use 4242 4242 4242 4242 for long number, any valid expiry and any 3 digit CVC.",
                    'images'      => ['https://www.rossedlin.com/logo-1000-400/'],
                    'amount'      => self::getAmount(),
                    'currency'    => self::getCurrencyCode(),
                    'quantity'    => 1,
                ]
            ],
            'success_url'          => env('APP_URL') . '/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url'           => env('APP_URL'),
        ]);

        return view('index', [
            'cssVersion'          => md5(file_get_contents(__DIR__ . '/../../../public/css/app.css')),
            'jsVersion'           => md5(file_get_contents(__DIR__ . '/../../../public/js/app.js')),
            'id'                  => self::getId(),
            'amount'              => self::getAmount(),
            'currency_code'       => self::getCurrencyCode(),
            'publish_key'         => self::getPublishKey(),
            'checkout_session_id' => $session->id,
            'csrf_token'          => csrf_token(),
        ]);
    }

    public function success()
    {
        return view('success', [
            'cssVersion' => md5(file_get_contents(__DIR__ . '/../../../public/css/app.css')),
            'jsVersion'  => md5(file_get_contents(__DIR__ . '/../../../public/js/app.js')),
        ]);
    }

    /**
     * @return int
     */
    public static function getId()
    {
        return time();
    }

    /**
     *
     */
    public static function getAmount()
    {
        return "999";
    }

    /**
     * @return string
     */
    private static function getSecretKey()
    {
        /**
         * Only test keys, does not matter that they're in the source
         */
        return env('STRIPE_SK');
    }

    /**
     * @return string
     */
    private static function getPublishKey()
    {
        /**
         * Only test keys, does not matter that they're in the source
         */
        return env('STRIPE_PK');
    }

    /**
     * @return string
     */
    private static function getCurrencyCode()
    {
        return "GBP";
    }
}