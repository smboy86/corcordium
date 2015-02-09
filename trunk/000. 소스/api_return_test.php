<?php
	ini_set('allow_url_fopen', 1);
	
	// 카테고리 리스트 
	$url = 'https://www.tistory.com/apis/category/list?access_token=8df7d60133971ee45bad7d173e422133_d170823622d4c111fe425a3b3c7cdef0&targetUrl=corcordium&output=json';
	 
	$ch=curl_init();
	ob_start("callback");
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_exec($ch);
	curl_close($ch);
	$result1 = ob_get_contents();
	ob_end_flush();
	echo "<br>";
	echo "getdata - ?> ".$result1;

	// 게시글 
	/*
	$url = 'https://www.tistory.com/apis/category/list?access_token=8df7d60133971ee45bad7d173e422133_d170823622d4c111fe425a3b3c7cdef0&targetUrl=corcordium&output=json';
	 
	$ch=curl_init();
	ob_start("callback");
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_exec($ch);
	curl_close($ch);
	$result2 = ob_get_contents();
	ob_end_flush();
*/
	$url2 = 'https://www.tistory.com/apis/category/list?access_token=8df7d60133971ee45bad7d173e422133_d170823622d4c111fe425a3b3c7cdef0&targetUrl=corcordium&output=json';
	 
	$ch2=curl_init();
	ob_start("callback");
	curl_setopt($ch2,CURLOPT_URL,$url2);
	curl_exec($ch2);
	curl_close($ch2);
	$result2 = ob_get_contents();
	ob_end_flush();	
	
	echo "<br>";
	echo "getdata2 - ?> ".$result2;


	//header("Location: /sys/admin.html");

?>