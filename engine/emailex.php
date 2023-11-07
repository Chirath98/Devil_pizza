<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://validect-email-verification-v1.p.rapidapi.com/v1/verify?email=example%40gmail.com",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: validect-email-verification-v1.p.rapidapi.com",
		"x-rapidapi-key: 63ad00d3edmsh008aecf1befe320p1a3376jsn54c1f963d922"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$response = json_decode($response);


if ($err) {
	echo "cURL Error #:" . $err;
} else {
    
    $email_details = array(
        'status'=> $response->status,
        'reason'=> $response->reason,
    );	
}

?>