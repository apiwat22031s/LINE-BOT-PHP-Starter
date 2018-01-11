<?php
$access_token = 'mpnvRMhoT6DhGFIKzzH6cvWUjzuRWor1mHNcSvAakQ2QN+9nCLJfClMd4OTBHJndUPZcudGjJc/bRORoRBxtJms3w/RWXdn/0jjVxu1lQsEspCv+Pz5ggA93K35/82hbTz2jaTQLIxAn8gt5xxT8OwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
