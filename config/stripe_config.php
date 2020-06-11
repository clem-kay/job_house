<?php
require_once ("stripe/init.php");

$stripe = array(
    "secret_key"      => "sk_test_51GsPXxEEFt2aMR7AkXjU3qzvGFHU3DOKLF13LKVxBEDsPnGFpQkVXiXu4rutrb6jWndLSExCzYLtUIiIW6GFG4pc00nheuijea",
    "publishable_key" => "pk_test_51GsPXxEEFt2aMR7A5JaAFPswqlawseUmNuUlVdNeTYnjEvasxfkfBcz67GdY9FbYLYKd4dEegADo0qCBUropcIcT00Fm78ojsz"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

