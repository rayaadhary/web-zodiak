<?php

function zodiak($q)
{
urlencode($q);
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://sameer-kumar-aztro-v1.p.rapidapi.com/?sign=".$q."&day=today",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: sameer-kumar-aztro-v1.p.rapidapi.com",
		"X-RapidAPI-Key: efa5fbcdb5msh8ad27aa46b17547p1e542bjsn21cfd76b7926"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
}

return json_decode($response, true);
}

function youtube($q)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://youtube-v31.p.rapidapi.com/search?q=zodiac'.$q.'&part=snippet%2Cid&regionCode=ID&maxResults=4&order=date",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: youtube-v31.p.rapidapi.com",
            "X-RapidAPI-Key: efa5fbcdb5msh8ad27aa46b17547p1e542bjsn21cfd76b7926"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    }

    $data = json_decode($response, true);
    return $data['items'];
}
