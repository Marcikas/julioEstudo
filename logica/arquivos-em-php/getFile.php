<?php

// Manipulando diferentes tipos de arquivos com php

// exemplo 1 - arquivo PHP
$config = include_once("config.php"); // CORRETO
$config2 = file_get_contents("config.php"); // ERRADO
var_dump($config);
var_dump($config2);

// exemplo 2 - arquivo JSON
$json = file_get_contents("config.json"); // CORRETO
var_dump($json);

$json2 = include_once("config.json"); // ERRADO
var_dump($json2);

$configJson = json_decode($json, true);
$configJson2 = json_decode($json2, true);
var_dump($configJson);
var_dump($configJson2);

// exemplo 3 - arquivo XML + macete para converter XML para um array associativo
$xml = simplexml_load_file("config.xml");
$xmlToJson = json_encode($xml);
$xmlToArray = json_decode($xmlToJson, true);
var_dump($xmlToArray);

// exemplo 4 - arquivo YAML 
// Detalhe - instalar a extensão do YAML para o PHP nesse link de acordo com a sua versão do PHP
// link: https://windows.php.net/downloads/pecl/releases/yaml/2.0.4/

$yamlString = file_get_contents("config.yaml");
$yaml = yaml_parse($yamlString);
var_dump($yaml);

