<?php

function callback($buffer)
{
  // 모든 apples를 oranges로 치환합니다.
  return $buffer;
}

ini_set('allow_url_fopen', 1);
$authorization_code = $_REQUEST['code'];
//echo $authorization_code.'<br>';
 
$client_id = '2bc5444c0924378e5b96e822e468dc82';
$client_secret = '2bc5444c0924378e5b96e822e468dc82883dfc0998343d5ecf8f5a7c8e0b2ba527e4c19f';
$redirect_uri = 'http://corcordium.co.kr/sys/callback.php';
$grant_type = 'authorization_code';
 
$url = 'https://www.tistory.com/oauth/access_token/?code=' . $authorization_code .
            '&client_id=' . $client_id . '&client_secret=' . $client_secret .
            '&redirect_uri=' . urlencode($redirect_uri) . '&grant_type=' . $grant_type;
 
$ch=curl_init();
ob_start("callback");
curl_setopt($ch,CURLOPT_URL,$url);
curl_exec($ch);
curl_close($ch);
$result = ob_get_contents();
ob_end_flush();

echo '<br>';
echo 'get data = '.$result;
//echo '<br>';
//echo $url;
//$access_token = file_get_contents($url);
//    echo $access_token;
?>
