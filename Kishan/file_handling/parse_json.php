<?php
//read JSON file
$json = file_get_contents('mero.json');
//Decode the JSON file
$json_data = json_decode($json, true);
//Display data
print_r($json_data);
