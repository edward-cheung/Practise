<?php
//1.连接数据库
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
//2.执行查询返回一个预处理对象
$sql="SELECT * FROM users";
$stmt=$pdo->query($sql);
$list=$stmt->fetchAll(PDO::FETCH_ASSOC);
//3.解析数据
foreach($list as $val){
	echo $val['id']."---".$val['name']."---".$val['age']."<br>";
}
//4.释放资源
$stmt=null;
$pdo=null;