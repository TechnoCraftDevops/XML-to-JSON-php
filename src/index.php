<?php

$xmldata = simplexml_load_file("./file/xmlFile.xml") or die("Failed to load");

function convertXmlToJson($xml)
{
    $json = json_encode($xml);
    $array = json_decode($json, true);
    $type = gettype($array);

    $result = file_put_contents('./results/xmlToJson.json', $json);

    var_dump($array);
    // var_dump($array);
    // var_dump($json);
}

convertXmlToJson($xmldata);