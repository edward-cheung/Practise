<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>用户显示</title>
</head>
<body>
<table style='text-align:left;' border='1'>
    <tr><th>ID</th><th>Name</th><th>Age</th><th>Edit</th><th>Delete</th></tr>
<?php
$conn=@mysql_connect('localhost','root','');
mysql_select_db('test',$conn);
$result=mysql_query("SELECT * FROM users ORDER BY id ASC ");//DESC
$data_count=mysql_num_rows($result);
for($i=0;$i<$data_count;$i++){
	$result_arr=mysql_fetch_assoc($result);
	$id=$result_arr['id'];
	$name=$result_arr['name'];
	$age=$result_arr['age'];
	echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a></td><td><a href='deleteuser.php?id=$id'>删除</a></td></tr>";
}
?>
</table>
<a href="adduser.html">添加用户</a>
</body>
</html>