<?php
include "connect.php";
$curl = curl_init();
$dest = $_POST["dest"];
$weight = $_POST["berat"];

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://rajaongkir.com/api/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=151&destination=$dest&weight=$weight&courier=jne",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: a5a350411bd983a4d07048d488318a38"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}