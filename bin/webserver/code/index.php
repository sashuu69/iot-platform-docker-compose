<?php
$url = 'http://webserverapi:5000';
$curl = curl_init($url);
$response = curl_exec($curl);
echo $response . PHP_EOL;

phpinfo();
?>