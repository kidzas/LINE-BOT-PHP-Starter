<?php
$access_token = 'qKPUpoabrPGOzlbGXaOkyNHDA6RzQXLk1qD/1An/AJkB6sKwgY79pb/lY6at9komRuJHRO49zndSnToj045CWh6H/O464wZTU2Sp078bIbwyf5K5xME0SFjfc92bmcGxl+f7R9mk8B11B25WKiS6JQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
