<?php


$url = "https://restcountries.com/v3.1/region/europe";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Fehler: " . curl_error($ch);
} else {
    $countries = json_decode($response, true);


    echo '<label for="country">Wähle ein Land:</label>';
    echo '<select name="country" id="country">';
    echo '<option value="">-- Bitte wählen --</option>';

    foreach ($countries as $country) {
        if (isset($country['name']['common'])) {
            $countryName = htmlspecialchars($country['name']['common']);
            echo '<option value="' . $countryName . '">' . $countryName . '</option>';
        }
    }

    echo '</select>';
}

curl_close($ch);
