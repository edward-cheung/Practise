<?php
if(isset($_POST['name'])){
}else{
	die("user name not define");
}
if(isset($_POST['age'])){
}else{
	die("user age not define");
}
$name=$_POST['name'];
if(empty($name)){
	die("user name is empty");
}
$age=$_POST['age'];
if(empty($age)){
	die("user age is empty");
}
$conn=@mysql_connect('localhost','root','');
if(!$conn){
	die("Can not connect db");
}
mysql_select_db('test',$conn);
$age=intval($age);
mysql_query("INSERT INTO users(name,age) VALUES('$name',$age)");
if(mysql_errno()){
	echo mysql_error();
}else{
	header("Location:6.php");
}
?>