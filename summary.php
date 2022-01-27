<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.covid19api.com/summary',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-Access-Token: 5cf9dfd5-3449-485e-b5ae-70a60e997864',
    'Authorization: Basic Y29yb25hOlpVYXY0dmF3ekNmTWNNWEhWOEI='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$json = json_decode($response,true);

$Global = $json["Global"];

$TotalConfirmed = $Global["TotalConfirmed"];
$TotalDeaths = $Global["TotalDeaths"];
$NewConfirmed = $Global["NewConfirmed"];
$NewDeaths = $Global["NewDeaths"];


$Countries = $json["Countries"];

foreach($Countries as $val){
$CountryName[]=$val["Country"];
$Infected[]=$val["TotalConfirmed"];
$Death[]=$val["TotalDeaths"];
$recovered[] = $val["TotalConfirmed"] - $val["TotalDeaths"];
$population[] = $val["Premium"]["CountryStats"]["Population"];
$continent[]= $val["Premium"]["CountryStats"]["Continent"];
											
}





?>