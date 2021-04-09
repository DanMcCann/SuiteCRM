<?php


class logic_hooks_class
{

    /**
     * @return string
     */
    public function convert($bean, $event, $arguments)
    {
        // Initialise Curl to perform the API call to convert the price.
        $ch = curl_init();
        // Declare the URL with the date of the purchase being passed in.
        $url = 'https://api.ratesapi.io/api/' . $bean->purchase_date_c . '?base=GBP&symbols=USD,EUR,AUD,NZD';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $conversion_rates = curl_exec($ch); // Execute the call.

        // Convert to an object, easier to work with.
        $conversion = json_decode($conversion_rates);

        // Convert the price to the neeed currencies to store in database.
        $price_eur = $bean->price_gbp_c * $conversion->rates->EUR;
        $price_usd = $bean->price_gbp_c * $conversion->rates->USD;
        $price_aud = $bean->price_gbp_c * $conversion->rates->AUD;
        $price_nzd = $bean->price_gbp_c * $conversion->rates->NZD;

        // Store prices in database.
        $bean->price_eur_c = $price_eur;
        $bean->price_usd_c = $price_usd;
        $bean->price_aud_c = $price_aud;
        $bean->price_nzd_c = $price_nzd;

        // The name being blank was annoying me.
        $bean->name = $bean->product_name_c;
        return 0;
    }
}
