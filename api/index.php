<?php

$curl = curl_init("https://taco-food-api.herokuapp.com/api/v1/food/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$retorno = array_map(function ($array) {
    $arrRetorno['carbo'] = $array['attributes']['carbohydrate']['qty'];    
    return $arrRetorno;
}, json_decode($response, true));

header("Content-type: application/json");
echo json_encode($retorno);
