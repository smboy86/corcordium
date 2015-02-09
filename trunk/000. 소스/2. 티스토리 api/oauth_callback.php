<?php

	/**
	 * 티스토리로 부터 받은 code와 함께 access_token 요청을 합니다.
	 */
	$authorization_code = $_REQUEST['code'];
	
	$client_id = '5074631282c503372374095f07ea8c14';
	$client_secret = '5074631282c503372374095f07ea8c144c5ca82d030222d8325d3cebc984b926314811a7';
	$redirect_uri = 'http://corcordium.co.kr/api/OAuth/oauth_callback.php';
	$grant_type = 'authorization_code';   //반드시 이단계에서는 authorization_code 라고 입력

	$url = 'https://www.tistory.com/oauth/access_token/?code=' . $authorization_code . '&client_id=' . $client_id . 
			'&client_secret=' . $client_secret . '&redirect_uri=' . urlencode($redirect_uri) . '&grant_type=' . $grant_type;

	$access_token = file_get_contents($url);
	echo $access_token;
	
?>