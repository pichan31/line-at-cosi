<?php
$access_token = 'Tz3+ArtFFAbUgGcSno6w8I0Tl6LYb6jNVGLfjKDM7c/L5JsObnw2PUUG5/rj2r4N33zAdxi+nnbhtznPtX+8M+MeDrvJ3+5yS1uF6xATQ3nKoJOb6AgLIxQDEW+b753rZdcViAAJd4x5vhx1JZxh+QdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
