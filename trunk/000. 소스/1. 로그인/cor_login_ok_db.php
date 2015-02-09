<?php
	if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
	$user_id = $_POST['user_id'];
	$user_pw = $_POST['user_pw'];
	
	$members = array('ADMIN'=>array('pw'=>'corcor', 'name'=>'코르코르디움 관리자'));

	$dbconnecting = mysql_connect('db.corcordium.co.kr', 'corcordium', 'cor35613562');
	
	if(!$dbconnecting){
		die("[connection error]".mysql_error());
	}
	
	echo "[connection OK] <br>";
	
	$flag = mysql_select_db("dbcorcordium");
	
	if(!$flag) die("[DB selection error]".mysql_error());
	else echo "DB dbcorcordium connection <br>";

	$sql = "SELECT USER_ID, PW FROM cor_user WHERE 1";
	//mysql_query("SET NAMES euckr");

	$result = mysql_query($sql);
	
	if(!$result) die("[SQL error]".mysql_error());


	$row = mysql_fetch_array($result);
	
	$noOfField = mysql_num_fields($result)."<br>"; 

	echo("<table border=1 cellpadding=3 align='left'> ");
	echo("<tr bgcolor='#cccccc'>");

	for($i=0; $i<$noOfField; $i++){
		$field_name = mysql_field_name($result,$i);
		echo("<th align='center'>$field_name</th> ");
	}
	echo("</tr> ");

	while($row = mysql_fetch_array($result)){
		echo("<tr> ");	
		for($i=0; $i<$noOfField; $i++){
			$field_name = mysql_field_name($result, $i);
			echo("<td align='center'>$row[$field_name]</td> ");
		}
		echo("</tr> ");
	}

	echo("</table>");

	mysql_close($dbconnecting);



/* 
	if(!isset($members[$user_id])) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
	}

	if($members[$user_id]['pw'] != $user_pw) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
	}

	session_start();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['user_name'] = $members[$user_id]['name'];

	
<meta http-equiv='refresh' content='0;url=cor_main.php'>
	
	*/
?>