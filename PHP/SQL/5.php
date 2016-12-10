<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>连接数据库</title>
</head>
<body>
<?php
$conn=@mysql_connect('localhost','root','');
if($conn){
	//echo '连接成功';
    mysql_select_db('test',$conn);
	$result=mysql_query("SELECT id,name FROM users WHERE id=1");
	/*
	$result_arr=mysql_fetch_assoc($result);
	print_r($result_arr);
	*/
	//echo'数据条数'.mysql_num_rows($result);
	/*输出所有数据
	$data_count=mysql_num_rows($result);
	for($i=0;$i<$data_count;$i++){
		print_r(mysql_fetch_assoc($result));
	}
	*/
	$result=mysql_query("SELECT COUNT(*) FROM users");
	$result_arr=mysql_fetch_array($result);
	echo '数据条数：'.$result_arr[0];
}else{
	echo '连接失败';
}
?>
</body>
</html>