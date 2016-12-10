<?php
//快捷操作方式
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
/* $sql="SELECT * FROM users";
foreach($pdo->query($sql) as $val){
	echo $val['id']."---".$val['name']."---".$val['age']."<br>";
} */

//$sql="INSERT INTO users(name,age) VALUES('er wang',20)";
//$sql="DELETE FROM users WHERE id=3";
$sql="UPDATE users SET age=18 WHERE name='si li'";
$res=$pdo->exec($sql);
if($res){
	echo "sucess";
}