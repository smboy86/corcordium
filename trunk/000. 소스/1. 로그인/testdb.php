<?
$dbconnect = mysql_connect("db.corcordium.co.kr","corcordium","cor35613562");
// mysql_connect()�� �̿��Ͽ� DB�� ����. �����Ѵٸ� 1.

if(!$dbconnect){ //���н� ����
 die("[connection error]".mysql_error());
}
echo "[connection OK]<br>";

$flag = mysql_select_db("dbcorcordium");
//select()�� �̿��Ͽ� Ư�� ���̺� ����. �����Ѵٸ� 1.
if(!$flag) die("[DB selection error]".mysql_error());
else echo "�����ͺ��̽� dbcorcordium�� ���õ� <br>";


$query = "select user_id, user_pw from cor_user";
mysql_query("SET NAMES euckr"); //�ѱ� ����� ���� ĳ���ͼ���.
$result = mysql_query($query); //����.
if(!$result) die("[SQL error]".mysql_error()); //���� ���н� ����

$noOfField = mysql_num_fields($result)."<br>"; 
//�ʵ��� ���� �����ͼ� �׸�ŭ �ݺ��� ����.
echo("<table border=1 cellpadding=3 align='left'> ");

//����� ���� ���̺� 
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



mysql_close($dbconnect); //���� ����.
?>