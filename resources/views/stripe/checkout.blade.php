<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:37
 *
 * @var int    $id
 * @var string $amount
 * @var string $currency_code
 * @var string $publish_key
 * @var string $checkout_session_id
 */
?>

<div class="card col-xs-12 col-lg-12" style="padding: 50px;">
    <div class="card-block">
        <h4 class="card-title">Stripe Checkout - ID #<?= $id ?></h4>
        <p class="card-text">
            This is Stripes Checkout form, it's a simplified design which you can integrate into your site.<br/>
            It'll <span style="font-weight: 500; font-style: italic; color: #0b2c0c;">popup</span> when you click the
            button.<br/>
            Don't worry, this is in <span style="font-weight: bold; color: #55161f;">test mode</span> so no money is
            actually transferred!
        </p>

        <div id="pay-button-container">
            <button id="pay-button" class="btn btn-primary">
                <span style="font-size:18px; line-height: 32px;">Click here to try Stripe</span>
                <span id="pay-button-loading" class="fas fa-spinner fa-spin"
                      style="display:none; font-size:24px; margin-left: 5px;"></span>
            </button>
        </div>

        <div id="pay-message" class="g-mt-20"></div>
    </div>
</div>

<script>

    /**
     *
     */

    $("#pay-button").click(function(){

        /**
         * Show loading animation
         */
        $('#pay-button').prop('disabled', true);
        $('#pay-button-loading').show();

        /**
         * Stripe Redirect
         */
        let stripe = Stripe('<?= $publish_key ?>');
        stripe.redirectToCheckout({
            sessionId: '<?= $checkout_session_id ?>'
        }).then(function (result) {
            // todo
            // If `redirectToCheckout` fails due to a browser or network
            // error, display the localized error message to your customer
            // using `result.error.message`.
        });
    });
</script>