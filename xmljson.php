<?php

//get XML
$xml = simplexml_load_string($xmlstring);
// convert to json
$json = json_encode($xml);
// return array
$array = json_decode($json,TRUE);

?>
