<?php
$id=$_POST['id'];
if(empty($id)){
	die("user id is empty");
}
$name=$_POST['name'];
if(empty($name)){
	die("user name is empty");
}
$age=$_POST['age'];
if(empty($age)){
	die("user age is empty");
}
$id=intval($_POST['id']);
$name=$_POST['name'];
$age=intval($_POST['age']);
$conn=@mysql_connect('localhost','root','');
if(!$conn){
	die("Can not connect db");
}
mysql_select_db('test',$conn);
mysql_query("UPDATE users SET name='$name',age=$age WHERE id=$id");
if(mysql_errno()){
	echo mysql_error();
}else{
	header("Location:6.php");
}
?>