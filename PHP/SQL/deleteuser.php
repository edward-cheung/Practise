<?php
if(empty($_GET['id'])){
	die("user id is empty");
}
$conn=@mysql_connect('localhost','root','');
if(!$conn){
	die("Can not connect db");
}
mysql_select_db('test',$conn);
$id=intval($_GET['id']);
mysql_query("DELETE FROM users WHERE id=$id");
if(mysql_errno()){
	die("fail to delete user with id $id");
}else{
    header("Location:6.php");
}
?>