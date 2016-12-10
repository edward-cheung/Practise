<?php
//采用预处理+事务处理执行SQL操作
//1.连接数据库
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
//2.执行数据操作
try{
	//开启事务
	$pdo->beginTransaction();
	$sql="insert into users(id,name,age) values(?,?,?)";
	$stmt=$pdo->prepare($sql);
	//传入一组参数
	$stmt->execute(array(null,"test1",23));
	$stmt->execute(array(null,"test2",23));
	$stmt->execute(array(null,"test3",23));
	//提交事务
	$pdo->commit();
}catch(PDOException $e){
	die("failed".$e->getMssage());
	$pdo->roolback();
}