<?php
// Request Token ��û �ּ�
$request_token_url = 'https://apis.daum.net/oauth/requestToken';
// ����� ���� URL
$authorize_url = 'https://apis.daum.net/oauth/authorize';
// Access Token URL
$access_token_url = 'https://apis.daum.net/oauth/accessToken';

// Consumer ���� (Consumer�� ����ϸ� ���� �� ����.)
$consumer_key = "2bc5444c0924378e5b96e822e468dc82";
$consumer_secret = "2bc5444c0924378e5b96e822e468dc82883dfc0998343d5ecf8f5a7c8e0b2ba527e4c19f";
$callback_url = "http://corcordium.co.kr/sys/callback.php";

// API prefix (��ȣ�� �ڿ��� �ִ� URL�� prefix)
$api_url = 'https://apis.daum.net';

// Service Provider�� ����� �������̽��� ���� �ִ� ��ü ����.
$oauth = new OAuth($consumer_key, $consumer_secret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
?>
