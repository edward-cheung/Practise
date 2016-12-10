<?php
//采用预处理SQL执行查询，并采用绑定结果方式输出
//1.连接数据库
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
//2.预处理的SQL语句
$sql="SELECT * FROM users";
$stmt=$pdo->prepare($sql);
//3.执行
$stmt->execute();
$stmt->bindColumn(1,$id);
$stmt->bindColumn("name",$name);
$stmt->bindColumn("age",$age);
while($row=$stmt->fetch(PDO::FETCH_COLUMN)){
	echo "{$id}:{$name}:{$age}<br>";
}
/* foreach($stmt as $row){
	echo $row['id']."---".$row['name']."<br>";
} */