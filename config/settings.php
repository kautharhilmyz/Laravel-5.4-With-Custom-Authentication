<?php

return [

    /*
     * Is email activation required
     */
    'send_activation_email' => env('SETTINGS_SEND_ACTIVATION_EMAIL', true),

    /*
     * Google reCAPTCHA spam filtering
     * Default key is for testing purpose only
     */
    'recaptcha_secret_key' => env('SETTINGS_GOOGLE_RECAPTCHA_SECRET_KEY', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'),
    'recaptcha_site_key' => env('SETTINGS_GOOGLE_RECAPTCHA_SITE_KEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI')

];