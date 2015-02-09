<?
$dbconnect = mysql_connect("db.corcordium.co.kr","corcordium","cor35613562");
// mysql_connect()를 이용하여 DB에 연결. 성공한다면 1.

if(!$dbconnect){ //실패시 종료
 die("[connection error]".mysql_error());
}
echo "[connection OK]<br>";

$flag = mysql_select_db("dbcorcordium");
//select()를 이용하여 특정 테이블에 연결. 성공한다면 1.
if(!$flag) die("[DB selection error]".mysql_error());
else echo "데이터베이스 dbcorcordium가 선택됨 <br>";


$query = "select user_id, user_pw from cor_user";
mysql_query("SET NAMES euckr"); //한글 출력을 위한 캐릭터셋팅.
$result = mysql_query($query); //질의.
if(!$result) die("[SQL error]".mysql_error()); //질의 실패시 종료

$noOfField = mysql_num_fields($result)."<br>"; 
//필드의 수를 가져와서 그만큼 반복문 수행.
echo("<table border=1 cellpadding=3 align='left'> ");

//출력을 위한 테이블 
echo("<tr bgcolor='#cccccc'>");
for($i=0; $i<$noOfField; $i++){
  $field_name = mysql_field_name($result,$i);
echo("<th align='center'>$field_name</th> ");
}
echo("</tr> ");

while($row = mysql_fetch_array($result)){
echo("<tr> ");
 for($i=0; $i<$noOfField; $i++){
 $field_name = mysql_field_name($result,$i);
echo("<td align='center'>$row[$field_name]</td> ");
}
echo("</tr> ");
}
echo("</table>");



mysql_close($dbconnect); //연결 종료.
?>