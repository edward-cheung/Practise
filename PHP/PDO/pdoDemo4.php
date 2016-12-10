<?php
//默认不提示，提示需用errorCode(),errorInfo();
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);//PDO::ERRMODE_SILENT或者 0
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
$sql="INSERT INTO ussers(name,age) VALUES('er wang',20)";
try{
	$res=$pdo->exec($sql);
}catch(PDOException $e){
	echo $e->getMessage();
}

/* if($res){
	echo "sucess";
}else{
	echo $pdo->errorCode();
	print_r($pdo->errorInfo());
} */