<?php 
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
switch($_GET['action']){
	case'add':
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$result=$pdo->exec("insert into stu values(null,'{$name}','{$sex}','{$age}')");
	if($result){
		echo "<script>alert('succed');window.location='systemHome.php';</script>";
	 }else{
		//print_r($pdo->errorInfo());
	    echo "<script>alert('failed');window.history.back();</script>";
	 }
	break;
	
	case'del':
	$result=$pdo->exec("delete from stu where id={$_GET['id']}");
	if($result){
		header("Location:systemHome.php");
	}else{
		print_r($pdo->errorInfo());
	}
	break;
	
	case'edit':
	$id = $_POST['id'];
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$result=$pdo->exec("update stu set name='{$name}',sex='{$sex}',age='{$age}' where id=$id");
	if($result){
		echo "<script>alert('succed');window.location='systemHome.php';</script>";
	 }else{
		//print_r($pdo->errorInfo());
	    echo "<script>alert('failed');window.history.back();</script>";
	 }
	break;
}