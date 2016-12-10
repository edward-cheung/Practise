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
//开启事务
$pdo->beginTransaction();
$sql="insert into users(id,name,age) values(?,?,?)";
$stmt=$pdo->prepare($sql);
$datalist=array(
    array(null,"test1",23),
    array(null,"test2",23),
    array(null,"test3",23)
);
$isCommit=true;
foreach($datalist as $data){
	$stmt->execute($data);
	if($stmt->errorCode()!=0){
		$pdo->rooback();
		$isCommit=false;
		break;
	}
}
if($isCommit){
	//提交事务
    $pdo->commit();
}