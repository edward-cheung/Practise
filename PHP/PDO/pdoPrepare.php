<?php
//？式的预处理语句，三种绑定方式
//1.连接数据库
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
//2.预处理的SQL语句
$sql="INSERT INTO users(id,name,age) VALUES(?,?,?)";
$stmt=$pdo->prepare($sql);
//3.对？的参数绑定
//第一种绑定方式
/* $stmt->bindValue(1,null);
$stmt->bindValue(2,'yida');
$stmt->bindValue(3,19); */
//第二种绑定方式
/* $stmt->bindParam(1,$id);
$stmt->bindParam(2,$name);
$stmt->bindParam(3,$age);
$id=null;
$name='yida';
$age=19; */
//4.执行
$stmt->execute(array(null,'yida',19));//第三种绑定方式：在execute()函数里添加array数组
echo $stmt->rowCount();