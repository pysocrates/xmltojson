<?php
//get XML
$xml = simplexml_load_string($xml_string);
// encode to json
$json = json_encode($xml);
// return array
$array = json_decode($json,TRUE);
?>