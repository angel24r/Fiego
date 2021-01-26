<?php

$curl = curl_init();
$email=(filter_input(INPUT_GET,'email'));
$c=(filter_input(INPUT_GET,'password'));
curl_setopt_array($curl, array(
  CURLOPT_URL => 'localhost:3333/api/v1/usuarios/registro',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "email":"'.$email.'",
    "password":"'.$c.'"  
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
header("location: login.php");

