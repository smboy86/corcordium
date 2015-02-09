<?php
// Request Token 요청 주소
$request_token_url = 'https://apis.daum.net/oauth/requestToken';
// 사용자 인증 URL
$authorize_url = 'https://apis.daum.net/oauth/authorize';
// Access Token URL
$access_token_url = 'https://apis.daum.net/oauth/accessToken';

// Consumer 정보 (Consumer를 등록하면 얻어올 수 있음.)
$consumer_key = "2bc5444c0924378e5b96e822e468dc82";
$consumer_secret = "2bc5444c0924378e5b96e822e468dc82883dfc0998343d5ecf8f5a7c8e0b2ba527e4c19f";
$callback_url = "http://corcordium.co.kr/sys/callback.php";

// API prefix (보호된 자원이 있는 URL의 prefix)
$api_url = 'https://apis.daum.net';

// Service Provider와 통신할 인터페이스를 갖고 있는 객체 생성.
$oauth = new OAuth($consumer_key, $consumer_secret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
?>
