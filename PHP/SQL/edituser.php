<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>编辑用户</title>
</head>
<body>
<?php
if(!empty($_GET['id'])){
	$conn=@mysql_connect('localhost','root','');
    if(!$conn){
	    die("Can not connect db");
    }
    mysql_select_db('test',$conn);
    $id=intval($_GET['id']);
    $result=mysql_query("SELECT * FROM users WHERE id=$id");
	if(mysql_errno()){
		die("Can not connect db");
	}
	$arr=mysql_fetch_assoc($result);
}else{
	die("id not define");
}
?>
<form action="edituser_server.php" method="post">
    <div>用户ID：
        <input type="text" name="id" value="<?php echo $arr['id']; ?>">
    </div>
    <div>用户名字：
        <input type="text" name="name" value="<?php echo $arr['name']; ?>">
    </div>
    <div>用户年龄：
        <input type="text" name="age" value="<?php echo $arr['age']; ?>">
    </div>
    <input type="submit" value="提交修改">
</form>
</body>
</html>